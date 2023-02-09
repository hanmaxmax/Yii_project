-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2023-02-09 02:59:01
-- 服务器版本： 8.0.28
-- PHP 版本： 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `yii2advanced`


-- --------------------------------------------------------

--
-- 表的结构 `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE `comment` (
  `id` int NOT NULL,
  `user_id` int NOT NULL COMMENT '用户id',
  `content` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '内容',
  `created_at` int NOT NULL COMMENT '创建时间',
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '用户名'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 转存表中的数据 `comment`
--

INSERT INTO `comment` (`id`, `user_id`, `content`, `created_at`, `username`) VALUES
(1, 2, '以钢铁洪流开始，进入泥头车阶段。', 1664249678, 'HJX'),
(2, 3, '这场战争杂糅了多种思潮的碰撞与博弈，既有冷战延续、梦回苏联的痕迹，又带有反新纳粹主义的情绪；既有“用帝国主义去抵抗帝国主义”的嫌疑，更有莫斯科“打得一拳开，免得百拳来”的触底反弹。', 1665249609, 'hello'),
(3, 2, '当美西方把国际金融基础设施作为大国博弈的要挟工具时，我们该当如何。倘若这真的成为一个国家的某种命门把持在列强手中，那是不是在未来的某个时刻，国家战略面临重要抉择关头，国家利益遭受重大威胁时，我们首先想到的是“退一步海阔天空”呢？在俄罗斯面临北约战略挤压的三十多年里，普京并非没有忍让，甚至在早期还对西方尤其是欧洲有过不切实际的幻想。那么结果又是如何呢？不是你不想退一步，而是对方得寸进尺。', 1666249741, 'HJX'),
(4, 4, '关于俄罗斯主动开战，一度让许多学界大佬“不会开战”的预测翻了车。尽管大家都明白这是美国为首北约的一个阳谋：不开打，北约就继续东扩；开打了，北约也事实上实现了东扩。但我发现国际上有大量的决策机构、智囊团体都对“普京提出的谈判条件被美国晾在桌面上数月之久”的事实选择性无视。甚少有人去剖析普京提出“北约停止东扩”这个近乎于斩断自己回旋空间的提议意味着什么。', 1667249741, 'YX'),
(5, 5, '俄乌战争对一带一路战略和中欧班列有一定负面影响，但因祸得福，因此可以打通非常重要的南线，这一局，或许是得大于失，也不一定。', 1670249741, 'Aurora'),
(6, 3, '“中俄背靠背”，不是双方一时的“投机取巧”和“权宜之计”，不是谁对谁的施舍，而是中俄追求“全球安全再平衡”，包括“政治安全”、“经济安全”、“军事安全”和“非传统安全”的再平衡，以此共同捍卫人类的正义公平和世界的和平安宁！对我们赖以生存发展的这个世界，中俄有情，中俄有责，中俄必胜！', 1671249741, 'hello'),
(7, 4, '我并不支持战争,原因很简单：它会造成平民的流离。而我也是个平头老百姓。然后，我当然也希望在双方利益都得到关切的前提下，俄乌能够结束战争，坐回谈判桌上。', 1672249741, 'YX'),
(8, 5, '国小而不处卑，力少而不畏强，无礼而侮大邻，贪愎而拙交者，可亡也。', 1672949741, 'Aurora');

-- --------------------------------------------------------

--
-- 表的结构 `countriesview`
--

DROP TABLE IF EXISTS `countriesview`;
CREATE TABLE `countriesview` (
  `country` varchar(100) COLLATE utf8mb4_general_ci NOT NULL COMMENT '国家',
  `name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL COMMENT '人名',
  `view` text COLLATE utf8mb4_general_ci NOT NULL COMMENT '观点',
  `picture` varchar(100) COLLATE utf8mb4_general_ci NOT NULL COMMENT '图片',
  `num_id` int NOT NULL COMMENT '序号'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 转存表中的数据 `countriesview`
--

INSERT INTO `countriesview` (`country`, `name`, `view`, `picture`, `num_id`) VALUES
('美国', '约瑟夫·拜登', '俄罗斯入侵乌克兰是一个最古老的人类冲动的例子，使用残酷力量和虚假信息来满足对绝对权力与控制的渴望。这不亚于对二战结束以来建立起来的以规则为基础的国际秩序的一次直接挑战，我们必须现在承诺长期进行这场战斗。', 'US.png', 1),
('中国', '王毅', '中方一贯尊重各国的主权和领土完整，也看到乌克兰问题有其复杂和特殊的历史经纬，强调应彻底摒弃冷战思维，通过对话谈判，最终形成均衡、有效、可持续的欧洲安全机制。', 'China.png', 2),
('德国', '奥拉夫·朔尔茨', '以最强烈的措辞”谴责俄罗斯对乌克兰发动袭击，称“这对乌克兰来说是可怕的一天，对欧洲来说是黑暗的一天。”', 'Germany.png', 3),
('英国', '鲍里斯·约翰逊', '普京总统对乌克兰人民发起行动时，西方不会袖手旁观。', 'UK.png', 4),
('菲律宾', '德尔芬·洛伦扎纳', '菲律宾在俄罗斯乌克兰的军事冲突上保持“中立”立场，并呼吁通过和平方式解决争端', 'fei.png', 5),
('印度', '拉杰库马尔·兰詹· 辛格', '在俄罗斯同乌克兰冲突事件上，印度保持“中立”，并希望可以通过和谈的和平方式来解决。', 'yindu.png', 6),
('日本', '岸田文雄', '俄罗斯“动摇了国际秩序的基础”，日本“将与美国及国际社会合作，迅速作出回应”。', 'Japan.png', 7);

-- --------------------------------------------------------

--
-- 表的结构 `economics`
--

DROP TABLE IF EXISTS `economics`;
CREATE TABLE `economics` (
  `num_id` int NOT NULL COMMENT '序号',
  `name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL COMMENT '名称',
  `influence` text COLLATE utf8mb4_general_ci NOT NULL COMMENT '影响',
  `picture1` varchar(100) COLLATE utf8mb4_general_ci NOT NULL COMMENT '图片1',
  `picture2` varchar(100) COLLATE utf8mb4_general_ci NOT NULL COMMENT '图片2'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 转存表中的数据 `economics`
--

INSERT INTO `economics` (`num_id`, `name`, `influence`, `picture1`, `picture2`) VALUES
(1, '小麦、肥料、重要金属', '俄罗斯和乌克兰的产出以及对外贸易大约仅占全球的2%，俄罗斯的对外直接投资和外国在俄罗斯的直接投资存量也仅仅为全球总额的1%-1.5%，两国在全球金融体系的重要性可以说是十分有限。但必须看到，俄罗斯是世界上最大的小麦出口国，俄乌两国占全球谷物出口量的1/3以上，占世界葵花籽油出口市场的52%。俄罗斯的石油和天然气产量分别约占全球的13%和17%。俄乌还是世界很多重要金属的生产和出口国。', 'ec1_1.png', 'ec1_2.png'),
(2, '大宗产品', '自2月下旬冲突发生以来，世界主要大宗产品的价格已出现大幅上升。据经合组织（OECD）统计，与今年1月的平均价格相比，在冲突发生后的头三周（2月24日至3月14日），世界小麦价格上涨了80%，肥料和镍的价格上涨了60%以上，其他重要金属产品的价格涨幅基本上也都超过了20%。与此同时，欧盟的原油和天然气、澳洲的煤的价格也大幅度上涨。', 'ec2_1.png', 'ec2_2.png'),
(3, '通货膨胀', '经合组织预计，俄乌冲突将使今年的全球产出增长率比原本该有的水平低1.1个百分点。对美国的影响为0.9个百分点，但对欧元区的影响将达到1.4个百分点。同时，冲突将使全球、欧元区和美国的通胀率分别上升2.5个百分点、2个百分点和1.4个百分点。如果冲突发展成为持久的消耗战或是短时间内显著升级，美国经济有可能陷入衰退甚至滞胀，一些新兴市场经济体和中低收入国家将发生偿债和粮食危机。', 'ec3_1.png', 'ec3_2.png'),
(4, '货币', '国际货币体系的基本格局不会发生重大变化，但美国对俄罗斯的金融制裁（特别是限制俄央行动用外汇储备），将削弱美元作为国际货币的可信度，从而对其主导地位产生不利影响。近日，在接受媒体采访时，IMF第一副总裁Gita Gopinath发出警告称，西方对俄罗斯实行的某些制裁，具体说就是冻结或没收俄罗斯央行持有的美元和欧元储备，将使其他外国央行不再愿意持有巨额的美元和欧元。值得注意的是，不久前沙特等产油国表示，将使用人民币作为石油交易的计价和支付货币。这对于推动人民币国际化应该具有非常积极的意义。', 'ec4_1.png', 'ec4_2.png');

-- --------------------------------------------------------

--
-- 表的结构 `energy`
--

DROP TABLE IF EXISTS `energy`;
CREATE TABLE `energy` (
  `num_id` int NOT NULL COMMENT '序号',
  `name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL COMMENT '名称',
  `influence` text COLLATE utf8mb4_general_ci NOT NULL COMMENT '影响',
  `picture` varchar(100) COLLATE utf8mb4_general_ci NOT NULL COMMENT '图片1',
  `picture2` varchar(100) COLLATE utf8mb4_general_ci NOT NULL COMMENT '图片2',
  `picture3` varchar(100) COLLATE utf8mb4_general_ci NOT NULL COMMENT '图片3'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='能源影响';

--
-- 转存表中的数据 `energy`
--

INSERT INTO `energy` (`num_id`, `name`, `influence`, `picture`, `picture2`, `picture3`) VALUES
(1, '原油', '受俄乌局势影响，俄罗斯石油出口量大跌。2022年2月，随着俄罗斯宣布发起特别军事行动，美国、欧盟和日本等国家对俄罗斯实施经济制裁和能源制裁。3月8日，美国总统乔·拜登签署了一项禁止俄罗斯的石油、液化天然气和煤炭进口到美国的行政命令，并宣布对于俄罗斯新的能源投资行为的禁止，当日WTI期货油价上涨至123.7美元；4月6日，时任英国外交大臣的特拉斯宣布将在2022年底全面停止从俄罗斯进口煤炭和石油，同时尽快结束天然气的进口；4月8日，欧盟首次宣布对于俄罗斯的能源出口的制裁——禁止进口俄罗斯的煤炭和其他固体化石燃料，到6月3日，宣布禁止进口俄罗斯的原油和石油产品，几天后WTI期货油价迎来了继3月8日后的次高点（122.11美元）。', 'en1_0.png', 'en1_1.png', 'en1_2.png'),
(2, '天然气', '天然气的价格经历了短期的巨大波动，但后期仍旧保持上升趋势。俄罗斯拥有世界上最大的天然气储量，同时稳定地在全球总产量中贡献17%左右的比例；在如此庞大的体量中，有超过7成的出口流向了欧洲。比起其他国家和地区，欧洲对于俄罗斯天然气出口的依存度相当高，因而造成了天然气价格的高敏感度，“牵一发而动全身”，从这个角度讲，欧洲天然气价格受俄乌冲突以及双方博弈而产生波动是必然的。俄乌冲突升级以后，欧盟“站队”美国，宣布了一系列针对俄罗斯的经济、能源制裁政策，包括禁止进口石油、煤炭等。针对欧盟的“连连出招”，俄罗斯也不甘示弱，从天然气供应入手以应对其猛烈的“攻势”——6月15日，由于西门子能源推迟交付项目所需设备，俄罗斯天然气工业股份公司（Gazprom）宣布将会将“北溪1号”的天然气运输量降至原先的40%左右；7月25日，Gazprom宣布维修另一台引擎，因此“北溪1号”天然气运输量会降低至原先的20%左右；9月15日，Gazprom宣布基于安全因素的考虑，将会彻底关停“北溪1号”，停止输气。因此，6月以后欧洲天然气价格一路走高，尽管8月底有所回调，但随着“北溪1号”的彻底关停，预计未来价格仍旧会回升。', 'en2_0.png', 'en2_1.png', 'en2_2.png'),
(3, '煤炭', '俄乌冲突爆发以后，欧洲碳价从2月23日（94.43欧）开始一路暴跌，于3月7号（57.72欧）跌至谷底，随即立马回升，但整体价格相较年初仍处于低位。理论上来说，能源价格上升导致企业排放成本变高，因此碳价和气价是正相关关系。但俄乌冲突导致欧洲天然气价格一路走高的同时，带来了碳价的短期骤降，其背后原因主要是两点：一是受到局势变化和经济下行压力的影响，企业需要出售碳配额增加现金流，以应对生产经营方面可能会面临的问题，而当市场大量抛售碳配额、购买量不及出售量时，碳价的下跌无法避免；二是原材料和能源价格的剧烈增加同样也给企业带来更高的生产成本，市场对于未来经济发展的悲观预期会导致企业降低生产量，从而碳排放减少，碳价下跌。欧盟碳价的迅速回升除了有市场稳定储备机制（Market Stability Reserve, MSR）存在的原因以外，还有能源方面的因素。欧洲天然气价格的上涨在短期内会导致欧洲各国增加煤炭能源使用量，以应对俄罗斯天然气供应中断风险。煤炭使用量的增加会导致更多碳排放，从而碳价上涨。', 'en3_0.png', 'en3_1.png', 'en3_2.png');

-- --------------------------------------------------------

--
-- 表的结构 `internationalrelation`
--

DROP TABLE IF EXISTS `internationalrelation`;
CREATE TABLE `internationalrelation` (
  `num_id` int NOT NULL COMMENT '序号',
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '名称',
  `influence` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '影响',
  `picture` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '图片1',
  `picture2` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '图片2',
  `picture3` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '图片3'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='国际关系影响';

--
-- 转存表中的数据 `internationalrelation`
--

INSERT INTO `internationalrelation` (`num_id`, `name`, `influence`, `picture`, `picture2`, `picture3`) VALUES
(1, '俄罗斯', '俄罗斯并不像世界认为的经济衰落，底气不足：俄罗斯在俄乌战争开始到现在，所做出的最大变化就是不同于14年俄罗斯吞并克里米亚后，俄乌战争俄罗斯所遭受西方的舆论攻击和金融攻击更强，但是其对外表现明显比14年时更有底气，在国际经济上俄罗斯似乎更衰弱了，但是为什么更有底气，后来我发现：\n\n能源方面，2021年俄罗斯石油产量5.34亿吨，占全球产量12%，同时是第二大石油出口国。2021年，俄罗斯天然气产量约为6390亿立方米，约占全球的六分之一，同时也是世界最大的天然气出口国。矿产方面，俄罗斯主导着钛、钯、氖、镍、铝等关键战略矿产资源，对军工、航天、航空、航海、芯片和电子元器件、汽车制造业等等都有重要影响。粮食方面，俄罗斯是世界第一大小麦出口国。2021年俄罗斯小麦产量在全球占比9.7%、出口量占比16.9%。同时，俄罗斯也是世界上最大氮肥出口国，钾肥出口排在世界第二，也是第三大磷肥出口国。\n除此之外在欧盟的石油、天然气进口当中，俄罗斯来源分别占比约30%、40%。德国对俄罗斯的能源进口依赖度更是显著高于欧盟的总体水平。在宣布制裁措施之后，欧洲天然气价格已经出现大幅上升。\n此外俄罗斯政府负债率仅占国内生产总值17.7%。', 'ir1_1.jpg', 'ir1_2.jpeg', 'ir1_3.jpg'),
(2, '美国', '美国明显力不从心：当俄乌战争开始，美国毅然决然的表示不会派遣美军其态度就是表明欢迎俄罗斯继续打，于此之后所有对俄罗斯的制裁也证明了这个观点：作为真正掀起俄乌战争的幕后黑手，美国却一改常态，没有进行与常任理事国的正面冲突，反而退缩幕后，成为所谓的最大赢家，其实只是自认为没有能力再次加入一场战争。而针对俄罗斯的所有制裁却都没有得到相应的成果，即使使用了所谓的金融核弹其效果也远不如14年对俄制裁之后的效果，要知道14年对俄金融制裁时，卢布可是暴跌40%，当很多人为现在卢布暴跌20%惊叹时，我却只从中间看到了美国的无力，而随后所谓驱逐俄罗斯联合国12名外交官时更佐证了这一点，随后美国表示不会对俄出口至欧洲能源施行制裁，更加证实了我的看法，美国真正开始霸权不再；\n\n长期来看，美国肆意挥霍造成财政赤字大幅扩张、滥用金融制裁，以及欧元等储备货币地位的提升，都会对美元的现有储备货币地位构成挑战。', 'ir2_1.jfif', 'ir2_2.jfif', 'ir2_3.jfif'),
(3, '欧洲', '欧盟内部分裂严重，简直是在表演双重人格，但其内部德法等大国在谋求欧盟在世界上更大的地位：欧盟自俄乌冲突爆发，其法德领导人与乌克兰和俄罗斯多次斡旋，试图阻止战争，而同样的欧盟加盟国波兰等国却一直在寻求欧盟与俄罗斯的对立。甚至直至27日，欧盟才真正开始对俄罗斯实行制裁，而波兰等国连武器都进行了运输，这显然是不合常理的，欧盟作为一个对外的整体，却在俄乌问题表现的如此分裂，没有统一的对外行动，这足以证明欧盟内部出现了大问题！而随后开启乌克兰加入欧盟的进程更是让我看到了，欧盟想在火中取栗，扩大欧盟影响力的决心！', 'ir3_1.jfif', 'ir3_2.jfif', 'ir3_3.jfif');

-- --------------------------------------------------------

--
-- 表的结构 `migration`
--

DROP TABLE IF EXISTS `migration`;
CREATE TABLE `migration` (
  `version` varchar(180) COLLATE utf8mb4_general_ci NOT NULL,
  `apply_time` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 转存表中的数据 `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1675179847),
('m130524_201442_init', 1675179858),
('m190124_110200_add_verification_token_column_to_user_table', 1675179858);

-- --------------------------------------------------------

--
-- 表的结构 `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `name` varchar(512) COLLATE utf8mb4_general_ci NOT NULL COMMENT '新闻标题',
  `date` datetime NOT NULL COMMENT '发布时间',
  `url` varchar(512) COLLATE utf8mb4_general_ci NOT NULL COMMENT '链接',
  `num_id` int NOT NULL COMMENT '序号'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='新闻表';

--
-- 转存表中的数据 `news`
--

INSERT INTO `news` (`name`, `date`, `url`, `num_id`) VALUES
('开局之年 北京民建企业家会员谈高质量发展之道', '2023-01-19 13:39:52', 'http://www.chinanews.com.cn/gn/2023/01-19/9938838.shtml', 1),
('中国复苏 世界机遇：总台CGTN成功举办新年首场电视主题论坛', '2023-01-08 23:40:08', 'http://www.chinanews.com.cn/gj/2023/01-08/9930571.shtml', 2),
('苹果失守 2万亿俱乐部解散', '2023-01-05 11:22:44', 'http://www.chinanews.com.cn/cj/2023/01-05/9928059.shtml', 3),
('美媒：2022，美国股市14年来最差，2023年可能依旧颠簸', '2022-12-31 13:00:39', 'http://www.chinanews.com.cn/gj/2022/12-31/9925141.shtml', 4),
('多家机构预测：明年台湾经济增长率恐难“保三”', '2022-12-16 21:11:30', 'http://www.chinanews.com.cn/gn/2022/12-16/9916380.shtml', 5),
('外贸人群像：订单有流失，但已看到隧道尽头的光亮', '2022-12-15 17:04:05', 'http://www.chinanews.com.cn/cj/2022/12-15/9915543.shtml', 6),
('俄议员：美国退出北约将是缓解世界紧张局势的好机会', '2022-11-30 21:37:26', 'http://www.chinanews.com.cn/gj/2022/11-30/9906057.shtml', 7),
('罗思义：拯救了上百万生命的中国政府，不应在经济上被误解', '2023-02-05 13:43:55', 'https://www.baidu.com/', 8);

-- --------------------------------------------------------

--
-- 表的结构 `ourteammems`
--

DROP TABLE IF EXISTS `ourteammems`;
CREATE TABLE `ourteammems` (
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL COMMENT '成员姓名',
  `id` int NOT NULL COMMENT '学号',
  `num_id` int NOT NULL COMMENT '序号',
  `major` varchar(255) COLLATE utf8mb4_general_ci NOT NULL COMMENT '专业'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='团队成员表';

--
-- 转存表中的数据 `ourteammems`
--

INSERT INTO `ourteammems` (`name`, `id`, `num_id`, `major`) VALUES
('韩佳迅', 2012682, 1, '计算机科学与技术'),
('姚鑫', 2014089, 2, '信息安全'),
('彭钰婷', 2013631, 3, '计算机科学与技术');

-- --------------------------------------------------------

--
-- 表的结构 `personhomework`
--

DROP TABLE IF EXISTS `personhomework`;
CREATE TABLE `personhomework` (
  `num_id` int NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL COMMENT '名字',
  `hw1` varchar(100) COLLATE utf8mb4_general_ci NOT NULL COMMENT '作业1',
  `hw2` varchar(100) COLLATE utf8mb4_general_ci NOT NULL COMMENT '作业2',
  `hw3` varchar(100) COLLATE utf8mb4_general_ci NOT NULL COMMENT '作业3',
  `github` varchar(100) COLLATE utf8mb4_general_ci NOT NULL COMMENT 'GitHub链接'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='个人作业';

--
-- 转存表中的数据 `personhomework`
--

INSERT INTO `personhomework` (`num_id`, `name`, `hw1`, `hw2`, `hw3`, `github`) VALUES
(1, '韩佳迅', '作业1（2012682_韩佳迅）.zip', '作业2（2012682_韩佳迅）.zip', '作业3（2012682_韩佳迅）.zip', 'https://github.com/hanmaxmax'),
(2, '林语盈', 'test1.zip', 'test2.zip', 'test3.zip', 'https://github.com/AldebaranL'),
(3, '彭钰婷', 'test1.zip', 'test2.zip', 'test3.zip', 'https://github.com/tttran67'),
(4, '姚鑫', 'test1.zip', 'test2.zip', 'test3.zip', 'https://github.com/yx66667');

-- --------------------------------------------------------

--
-- 表的结构 `tb_user_authority`
--

DROP TABLE IF EXISTS `tb_user_authority`;
CREATE TABLE `tb_user_authority` (
  `tb_uaId` int UNSIGNED NOT NULL COMMENT '权限编号',
  `tb_uaRemark` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL COMMENT '权限说明',
  `tb_uaIsmanager` tinyint(1) DEFAULT NULL COMMENT '是否为管理员'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='用户权限表' ROW_FORMAT=DYNAMIC;

--
-- 转存表中的数据 `tb_user_authority`
--

INSERT INTO `tb_user_authority` (`tb_uaId`, `tb_uaRemark`, `tb_uaIsmanager`) VALUES
(1, '管理员权限', 1),
(2, '用户权限', 0),
(3, '游客权限', 0);

-- --------------------------------------------------------

--
-- 表的结构 `teamhomework`
--

DROP TABLE IF EXISTS `teamhomework`;
CREATE TABLE `teamhomework` (
  `num_id` int NOT NULL COMMENT '序号',
  `name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL COMMENT '作业名称',
  `position` varchar(100) COLLATE utf8mb4_general_ci NOT NULL COMMENT '文件名称'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='团队作业';

--
-- 转存表中的数据 `teamhomework`
--

INSERT INTO `teamhomework` (`num_id`, `name`, `position`) VALUES
(1, '需求文档', 'test1.pdf'),
(2, '设计文档', 'test2.pdf'),
(3, '实现文档', 'test3.pdf'),
(4, '用户手册', '互联网数据库开发.pdf'),
(5, '部署文档', 'test5.pdf'),
(6, '项目展示PPT', 'test6.pdf'),
(7, '数据库文件', 'install.sql');

-- --------------------------------------------------------

--
-- 表的结构 `test`
--

DROP TABLE IF EXISTS `test`;
CREATE TABLE `test` (
  `test1` int NOT NULL COMMENT 'test1',
  `test2` int NOT NULL COMMENT 'test2',
  `test_id` int NOT NULL COMMENT 'test_id'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 转存表中的数据 `test`
--

INSERT INTO `test` (`test1`, `test2`, `test_id`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 3);

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8mb4_general_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `status` smallint NOT NULL DEFAULT '10',
  `created_at` int NOT NULL,
  `updated_at` int NOT NULL,
  `verification_token` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `verification_token`) VALUES
(2, 'HJX', 'JHOVeSkgBIUrCDP6s6oMuZioOraVC6oW', '$2y$13$LyXh2Ag20CMAToYvMbxXy.l7A4.UfzWyxu2cRPzmc.BgCIfy217Ru', NULL, 'hanmaxmax@163.com', 10, 1675180289, 1675180289, 'ojy6pdUihe5v2G-Lr3lpnCb5N7SKZiG9_1675180289'),
(3, 'hello', '6E61iBpyVwPb1BYTjo21HsDyv8GCFkWo', '$2y$13$6NEbgA3Iv5H88htftZXB5OP1GNhHnJNJVVqqMA72YOkzoWE5/VjRS', NULL, '123@qq.com', 10, 1675784951, 1675784951, 'gEiMD7TS1cNx9Q0TAvC9JJiWfsXxj0m4_1675784951'),
(4, 'YX', 'owznswEHad09Lc2dhsnEwAYTwuL4_9yR', '$2y$13$hPLslxJLLnzaFzZiNMQcsuHjCwSG/p8xb.9IJWQTflSHMY7IYl6V.', NULL, '456@qq.com', 10, 1675785947, 1675785947, 'PFBTxKziX0bu1NRHoOI_7NeVMKs0zj1s_1675785947'),
(5, 'Aurora', 'X-m65Zi61sUTfz8bNkHIBRBSKBjU5tgt', '$2y$13$8lzbGkvUXA37Mr7Vw0l5AOTgjeHzx/8iIwu8KNgWBWqqno/soiLiO', NULL, '798@qq.com', 10, 1675786150, 1675786150, 'UDITtoPOorVKPC-34NpO7pTE6A71Tb6i_1675786150'),
(6, 'LYY', 'ZlK91IQWW3KA5D3PlydhqW5q-LtfHJs7', '$2y$13$vzFye851AQ71Uztij.rUmO/THXIJNiS8Ck22QsbimYzHpiVvH2cta', NULL, '111@qq.com', 9, 1675866867, 1675866867, 'cvG5MPe3vE1TplyOHCK_jWKac_GdVxTR_1675866867');

--
-- 转储表的索引
--

--
-- 表的索引 `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- 表的索引 `countriesview`
--
ALTER TABLE `countriesview`
  ADD PRIMARY KEY (`num_id`);

--
-- 表的索引 `economics`
--
ALTER TABLE `economics`
  ADD PRIMARY KEY (`num_id`);

--
-- 表的索引 `energy`
--
ALTER TABLE `energy`
  ADD PRIMARY KEY (`num_id`);

--
-- 表的索引 `internationalrelation`
--
ALTER TABLE `internationalrelation`
  ADD PRIMARY KEY (`num_id`);

--
-- 表的索引 `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- 表的索引 `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`num_id`);

--
-- 表的索引 `ourteammems`
--
ALTER TABLE `ourteammems`
  ADD PRIMARY KEY (`num_id`);

--
-- 表的索引 `personhomework`
--
ALTER TABLE `personhomework`
  ADD PRIMARY KEY (`num_id`);

--
-- 表的索引 `tb_user_authority`
--
ALTER TABLE `tb_user_authority`
  ADD PRIMARY KEY (`tb_uaId`) USING BTREE;

--
-- 表的索引 `teamhomework`
--
ALTER TABLE `teamhomework`
  ADD PRIMARY KEY (`num_id`);

--
-- 表的索引 `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`test_id`);

--
-- 表的索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- 使用表AUTO_INCREMENT `countriesview`
--
ALTER TABLE `countriesview`
  MODIFY `num_id` int NOT NULL AUTO_INCREMENT COMMENT '序号', AUTO_INCREMENT=8;

--
-- 使用表AUTO_INCREMENT `economics`
--
ALTER TABLE `economics`
  MODIFY `num_id` int NOT NULL AUTO_INCREMENT COMMENT '序号', AUTO_INCREMENT=5;

--
-- 使用表AUTO_INCREMENT `energy`
--
ALTER TABLE `energy`
  MODIFY `num_id` int NOT NULL AUTO_INCREMENT COMMENT '序号', AUTO_INCREMENT=4;

--
-- 使用表AUTO_INCREMENT `internationalrelation`
--
ALTER TABLE `internationalrelation`
  MODIFY `num_id` int NOT NULL AUTO_INCREMENT COMMENT '序号', AUTO_INCREMENT=5;

--
-- 使用表AUTO_INCREMENT `news`
--
ALTER TABLE `news`
  MODIFY `num_id` int NOT NULL AUTO_INCREMENT COMMENT '序号', AUTO_INCREMENT=9;

--
-- 使用表AUTO_INCREMENT `ourteammems`
--
ALTER TABLE `ourteammems`
  MODIFY `num_id` int NOT NULL AUTO_INCREMENT COMMENT '序号', AUTO_INCREMENT=4;

--
-- 使用表AUTO_INCREMENT `personhomework`
--
ALTER TABLE `personhomework`
  MODIFY `num_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用表AUTO_INCREMENT `teamhomework`
--
ALTER TABLE `teamhomework`
  MODIFY `num_id` int NOT NULL AUTO_INCREMENT COMMENT '序号', AUTO_INCREMENT=8;

--
-- 使用表AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
