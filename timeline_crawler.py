import pymysql
import requests
import re
import bs4
from bs4 import BeautifulSoup
def crawl():
    #url = 'https://sou.chinanews.com.cn/search.do'
    url = 'https://sou.chinanews.com.cn/search.do?q=%E4%BF%84%E4%B9%8C%E6%88%98%E4%BA%89'
    r = requests.get(url)
    r.raise_for_status()

    # 创建一个BeautifulSoup解析对象
    soup = BeautifulSoup(r.text,'html.parser')

    texts = [each.get_text().strip() for each in soup.find_all(name='li', attrs={'class': 'news_title'})]

    print(texts)
    times=[each.get_text()[-40:].strip() for each in soup.find_all(name='li', attrs={'class': 'news_other'})]
    urls=[item.find('a')['href'] for item in soup.find_all(name='li', attrs={'class': 'news_title'})]
    print(times)
    return texts,times,urls

def updateDB():
    texts,times,urls = crawl()
    conn = pymysql.connect(host='127.0.0.1'  # 连接名称，默认127.0.0.1
                           , user='root'  # 用户名
                           , passwd='root'  # 密码
                           , port=3306  # 端口，默认为3306
                           , db='yii2advanced'  # 数据库名称
                           , charset='utf8'  # 字符编码
                           )
    cur = conn.cursor()  # 生成游标对象
    for i in range(min(8,len(texts))):
        sql = "update `news` set `name` = '%s',`date` = '%s',`url`='%s' where `num_id` = %d;"%(texts[i],times[i],urls[i],i)
        print(sql)
        cur.execute(sql)  # 执行SQL语句
    sql = "select * from `news` "  # SQL语句
    cur.execute(sql)  # 执行SQL语句
    data = cur.fetchall()  # 通过fetchall方法获得数据
    for i in data[:2]:  # 打印输出前2条数据
        print(i)

    # 提交之前的操作，如果之前已经执行多次的execute，那么就都进行提交
    conn.commit()
    cur.close()  # 关闭游标
    conn.close()  # 关闭连接


from threading import Timer
import time
def loop_func(func, second):
    # 每隔second秒执行func函数
    while True:
        timer = Timer(second, func)
        timer.start()
        timer.join()


if __name__ == '__main__':
    loop_func(updateDB,10)

