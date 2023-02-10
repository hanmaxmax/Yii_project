-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2023-02-10 03:41:53
-- 服务器版本： 8.0.19
-- PHP 版本： 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `yii2advanced`
--

-- --------------------------------------------------------

--
-- 表的结构 `comment`
--

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

CREATE TABLE `internationalrelation` (
  `num_id` int NOT NULL COMMENT '序号',
  `name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL COMMENT '名称',
  `influence` text COLLATE utf8mb4_general_ci NOT NULL COMMENT '影响',
  `picture` varchar(100) COLLATE utf8mb4_general_ci NOT NULL COMMENT '图片1',
  `picture2` varchar(100) COLLATE utf8mb4_general_ci NOT NULL COMMENT '图片2',
  `picture3` varchar(100) COLLATE utf8mb4_general_ci NOT NULL COMMENT '图片3'
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
('俄防长：美西方向乌提供重型武器将导致局势朝着不可预测方向升级', '2023-02-07 22:18:58', 'http://www.chinanews.com.cn/gj/2023/02-07/9949306.shtml', 1),
('俄乌局势进展：俄称普京与格罗西本周未安排会面  泽连斯基召开最高统帅部会议', '2023-02-07 21:11:28', 'http://www.chinanews.com.cn/gj/2023/02-07/9949259.shtml', 2),
('局势紧张，换不换防长，泽连斯基犯难了', '2023-02-07 16:40:21', 'http://www.chinanews.com.cn/gj/2023/02-07/9949101.shtml', 3),
('非法移民和难民问题让欧盟左右为难（环球热点）', '2023-02-07 14:59:22', 'http://www.chinanews.com.cn/gj/2023/02-07/9949030.shtml', 4),
('土耳其强震将对该国和世界经济带来哪些影响？', '2023-02-07 11:25:31', 'http://www.chinanews.com.cn/cj/2023/02-07/9948916.shtml', 5),
('中方呼吁乌克兰危机有关方早日停火止战', '2023-02-07 05:51:18', 'http://www.chinanews.com.cn/gj/2023/02-07/9948716.shtml', 6),
('俄乌局势进展：泽连斯基宣布制裁俄核工业 俄白领导人将于近期举行会晤', '2023-02-06 22:06:21', 'http://www.chinanews.com.cn/gj/2023/02-06/9948561.shtml', 7),
('2022年进口量大降近3成，洋牛奶为何突然“不香了”？', '2023-02-06 16:36:10', 'http://www.chinanews.com.cn/cj/2023/02-06/9948423.shtml', 8),
('中国汽车“开足马力”出海（专家解读）', '2023-02-06 15:39:25', 'http://www.chinanews.com.cn/cj/2023/02-06/9948349.shtml', 9),
('63名俄方在押军事人员被乌方释放返回俄罗斯', '2023-02-06 08:54:41', 'http://www.chinanews.com.cn/gj/shipin/cns-d/2023/02-06/news950577.shtml', 10),
('德国经济去年实现正增长 GDP比上年实际增长1.9%', '2023-02-06 05:54:22', 'http://www.chinanews.com.cn/gj/2023/02-06/9948043.shtml', 11),
('花生“配齐”风险管理工具见成效', '2023-02-06 05:50:46', 'http://www.chinanews.com.cn/cj/2023/02-06/9948036.shtml', 12),
('世界经济论坛执行董事施力伟：相信2023年中国经济增速将加快', '2023-02-06 05:05:40', 'http://www.chinanews.com.cn/cj/2023/02-06/9948022.shtml', 13),
('全球连线|俄乌局势升级后首次举办 这场峰会谈了些啥？', '2023-02-05 20:46:00', 'http://www.chinanews.com.cn/shipin/2023/02-05/news950542.shtml', 14),
('俄乌局势进展：俄警告美提供远程武器将致局势升级 泽连斯基剥夺多名前高官乌克兰国籍', '2023-02-05 19:10:04', 'http://www.chinanews.com.cn/gj/2023/02-05/9947839.shtml', 15),
('俄乌局势进展：西方多国决定对俄石油产品实施限价 俄称将采取措施维护利益', '2023-02-04 21:32:12', 'http://www.chinanews.com.cn/gj/2023/02-04/9947445.shtml', 16),
('俄国防部：63名被俘俄军人从乌克兰返回', '2023-02-04 20:46:21', 'http://www.chinanews.com.cn/gj/2023/02-04/9947419.shtml', 17),
('又增一国！英媒：葡萄牙总理称将向乌克兰运送“豹”式坦克', '2023-02-04 20:30:56', 'http://www.chinanews.com.cn/gj/2023/02-04/9947404.shtml', 18),
('美首次援乌远程火箭弹 俄就美新一轮军援发出警告', '2023-02-04 13:44:08', 'http://www.chinanews.com.cn/gj/2023/02-04/9947201.shtml', 19),
('美国向乌克兰再提供超过20亿美元军事援助', '2023-02-04 07:44:48', 'http://www.chinanews.com.cn/gj/2023/02-04/9947068.shtml', 20),
('乌克兰外长：随时可能与伊朗断绝外交关系', '2023-02-03 21:29:21', 'http://www.chinanews.com.cn/gj/2023/02-03/9946974.shtml', 21),
('德媒：西方在为乌克兰提供弹药上面临困境', '2023-02-03 20:58:58', 'http://www.chinanews.com.cn/gj/2023/02-03/9946941.shtml', 22),
('俄乌局势进展：乌促欧盟对俄实施更多制裁 俄称今年俄武器交付量将大增', '2023-02-03 19:25:57', 'http://www.chinanews.com.cn/gj/2023/02-03/9946849.shtml', 23),
('埃尔多安谈西方向乌提供武器：高风险举动，“只会肥了军火商的私囊”', '2023-02-03 10:36:12', 'http://www.chinanews.com.cn/gj/2023/02-03/9946434.shtml', 24),
('“世界小商品之都”开市：客流超预期，有店铺散货被抢空', '2023-02-03 10:32:24', 'http://www.chinanews.com.cn/cj/2023/02-03/9946425.shtml', 25),
('美联储首提通胀降温，“加息潮”能否迎来拐点', '2023-02-03 10:28:32', 'http://www.chinanews.com.cn/cj/2023/02-03/9946419.shtml', 26),
('外贸如何推动我国经济复苏', '2023-02-03 09:44:55', 'http://www.chinanews.com.cn/cj/2023/02-03/9946376.shtml', 27),
('动作频频！美高官密集到亚洲谈论“挑战”，专家：不利于地区稳定', '2023-02-02 19:35:41', 'http://www.chinanews.com.cn/gj/2023/02-02/9946096.shtml', 28),
('俄乌局势进展：乌每月国际融资需求约为30亿美元 俄称若乌展现诚意俄有意谈判', '2023-02-02 18:49:50', 'http://www.chinanews.com.cn/gj/2023/02-02/9946047.shtml', 29),
('乌防长称俄动员50万士兵，最快2月24日发起重大攻势', '2023-02-02 17:12:16', 'http://www.chinanews.com.cn/gj/2023/02-02/9945990.shtml', 30),
('加码拱火 美国首次准备向乌克兰提供远程火箭弹', '2023-02-02 16:20:27', 'http://www.chinanews.com.cn/gj/2023/02-02/9945922.shtml', 31),
('瑞士信贷银行：美元在全球外汇储备中的地位或继续下降', '2023-02-02 11:06:39', 'http://www.chinanews.com.cn/gj/2023/02-02/9945704.shtml', 32),
('一文读懂美联储兔年首秀：首提通胀降温，重申年内无降息', '2023-02-02 11:01:53', 'http://www.chinanews.com.cn/cj/2023/02-02/9945701.shtml', 33),
('乘油价东风 埃克森美孚时赚630万美元', '2023-02-02 10:02:17', 'http://www.chinanews.com.cn/cj/2023/02-02/9945648.shtml', 34),
('美联储宣布加息25个基点 预计还将持续上调利率', '2023-02-02 06:59:57', 'http://www.chinanews.com.cn/gj/2023/02-02/9945517.shtml', 35),
('俄乌局势进展：英美拒绝向乌提供战机 以总理称愿考虑担任俄乌调解人', '2023-02-01 21:24:58', 'http://www.chinanews.com.cn/gj/2023/02-01/9945409.shtml', 36),
('外媒：克宫回应美国拟向乌提供远程火箭弹，“不会改变事件进程”', '2023-02-01 18:51:26', 'http://www.chinanews.com.cn/gj/2023/02-01/9945305.shtml', 37),
('戴高乐之孙谴责美国拱火俄乌冲突：“法国正付出沉重代价”', '2023-02-01 14:51:05', 'http://www.chinanews.com.cn/gj/2023/02-01/9945091.shtml', 38),
('岸田会见北约秘书长，还告诉对方日本计划设常驻北约代表团', '2023-02-01 11:34:02', 'http://www.chinanews.com.cn/gj/2023/02-01/9945000.shtml', 39),
('西方向乌克兰提供更多武器 遭多方批评', '2023-02-01 10:12:13', 'http://www.chinanews.com.cn/gj/2023/02-01/9944932.shtml', 40),
('IMF最新经济展望为何变乐观了？', '2023-02-01 10:01:37', 'http://www.chinanews.com.cn/cj/2023/02-01/9944916.shtml', 41),
('关注俄乌冲突：俄称控制一居民点 乌称打击俄军事目标', '2023-02-01 09:40:41', 'http://www.chinanews.com.cn/gj/shipin/2023/02-01/news950067.shtml', 42),
('四大航去年预亏总额超千亿：看好今年表现，国内市场恢复更快', '2023-02-01 09:39:47', 'http://www.chinanews.com.cn/cj/2023/02-01/9944886.shtml', 43),
('公募“逆势”调仓半导体：减持绩优设备企业，增持绩差设计公司', '2023-02-01 09:38:37', 'http://www.chinanews.com.cn/cj/2023/02-01/9944884.shtml', 44),
('欧元区去年GDP增长 但“火车头”掉队', '2023-02-01 09:14:44', 'http://www.chinanews.com.cn/cj/2023/02-01/9944855.shtml', 45),
('俄乌局势进展：拜登称不会向乌提供F-16战机 英法等国就向乌提供军火发声', '2023-01-31 18:37:45', 'http://www.chinanews.com.cn/gj/2023/01-31/9944609.shtml', 46),
('重重危机笼罩欧洲三大国，法媒：英法德等将再迎一个艰难的春天', '2023-01-31 11:34:44', 'http://www.chinanews.com.cn/gj/2023/01-31/9944378.shtml', 47),
('给不给乌克兰提供F-16战斗机？拜登：NO！', '2023-01-31 10:25:58', 'http://www.chinanews.com.cn/gj/2023/01-31/9944291.shtml', 48),
('不断“鹰化”，能否给日本带来安全？', '2023-01-31 09:45:59', 'http://www.chinanews.com.cn/gj/2023/01-31/9944239.shtml', 49),
('韩国赶超日本，成为中国第四大贸易伙伴', '2023-01-30 20:14:24', 'http://www.chinanews.com.cn/cj/2023/01-30/9944010.shtml', 50),
('俄乌局势进展：德总理重申不会向乌提供战机  俄称普京愿意与朔尔茨交流', '2023-01-30 19:03:46', 'http://www.chinanews.com.cn/gj/2023/01-30/9943949.shtml', 51),
('关注俄乌冲突 德总理警告向乌克兰提供武器要谨慎行事', '2023-01-30 13:37:10', 'http://www.chinanews.com.cn/gj/shipin/2023/01-30/news949894.shtml', 52),
('关注俄乌冲突 乌防长称东部战事困难但仍在控制之下', '2023-01-30 13:33:31', 'http://www.chinanews.com.cn/gj/shipin/2023/01-30/news949890.shtml', 53),
('关注俄乌冲突 俄称在多地打击乌军人员和装备', '2023-01-30 13:31:47', 'http://www.chinanews.com.cn/gj/shipin/2023/01-30/news949887.shtml', 54),
('西方主战坦克援乌 美国怂恿欧洲冲前面', '2023-01-30 11:11:50', 'http://www.chinanews.com.cn/gj/2023/01-30/9943663.shtml', 55),
('港媒：西方“普世主义”应让位于平等对话', '2023-01-30 11:02:08', 'http://www.chinanews.com.cn/gj/2023/01-30/9943648.shtml', 56),
('被做空的亚洲首富冤不冤', '2023-01-30 10:20:21', 'http://www.chinanews.com.cn/cj/2023/01-30/9943603.shtml', 57),
('十大券商看后市｜内外资接力，A股打响春季攻势，如何配置', '2023-01-30 09:34:20', 'http://www.chinanews.com.cn/cj/2023/01-30/9943559.shtml', 58),
('分歧公开化 土方对瑞典芬兰“入约”三方会谈机制“说不”', '2023-01-30 02:19:31', 'http://www.chinanews.com.cn/gj/2023/01-30/9943468.shtml', 59),
('乌克兰：已要到321辆坦克，正在要远程导弹！', '2023-01-29 22:44:22', 'http://www.chinanews.com.cn/gj/shipin/cns-d/2023/01-29/news949852.shtml', 60),
('俄乌局势进展：北约高级军官称已为与俄直接对抗做好准备 乌克兰提出远程导弹请求', '2023-01-29 20:58:52', 'http://www.chinanews.com.cn/gj/2023/01-29/9943409.shtml', 61),
('一个春节，读懂中国经济的世界意义', '2023-01-29 15:36:46', 'http://www.chinanews.com.cn/gn/2023/01-29/9943256.shtml', 62),
('“面包店给补贴了，那肉店呢？”', '2023-01-29 15:25:55', 'http://www.chinanews.com.cn/gj/2023/01-29/9943249.shtml', 63),
('金正恩妹妹发声，谴责美国是“罪魁祸首”', '2023-01-29 14:12:51', 'http://www.chinanews.com.cn/gj/2023/01-29/9943192.shtml', 64),
('乌克兰：已要到321辆坦克，正在要远程导弹！', '2023-01-29 09:08:04', 'http://www.chinanews.com.cn/gj/2023/01-29/9943014.shtml', 65),
('俄罗斯将在前线补充部署新式防空系统', '2023-01-29 07:17:13', 'http://www.chinanews.com.cn/gj/2023/01-29/9942995.shtml', 66),
('乌克兰再求战斗机 俄罗斯指美国借军援延长冲突', '2023-01-28 21:22:56', 'http://www.chinanews.com.cn/gj/2023/01-28/9942861.shtml', 67),
('俄乌局势进展：乌反对俄白参加巴黎奥运会 俄称西方将与俄对抗升至新水平', '2023-01-28 18:52:02', 'http://www.chinanews.com.cn/gj/2023/01-28/9942781.shtml', 68),
('网友：美国无视俄乌民众代价攫取利润', '2023-01-28 11:28:15', 'http://www.chinanews.com.cn/gj/shipin/2023/01-28/news949708.shtml', 69),
('紧急“灭火” 德国否认直接参与俄乌冲突', '2023-01-28 11:11:58', 'http://www.chinanews.com.cn/gj/shipin/2023/01-28/news949699.shtml', 70),
('关注俄乌冲突：俄称打击乌军工企业 乌称击退俄军进攻', '2023-01-28 10:46:06', 'http://www.chinanews.com.cn/gj/shipin/2023/01-28/news949691.shtml', 71),
('俄方：西方向乌克兰提供坦克会将对抗推向新高度', '2023-01-28 03:40:18', 'http://www.chinanews.com.cn/gj/2023/01-28/9942341.shtml', 72),
('乌克兰危机推动美国2022财年军售额激增', '2023-01-28 03:38:30', 'http://www.chinanews.com.cn/gj/2023/01-28/9942338.shtml', 73),
('联合国：西方向乌提供多款主战坦克与和平背道而驰', '2023-01-28 01:41:51', 'http://www.chinanews.com.cn/gj/2023/01-28/9942323.shtml', 74),
('俄乌局势进展：英法等国就援乌坦克相继表态  俄方要求德国说明立场', '2023-01-27 21:00:22', 'http://www.chinanews.com.cn/gj/2023/01-27/9942274.shtml', 75),
('欧洲头条丨德国“豹”放行入乌 战火升级谁买单？', '2023-01-27 19:34:47', 'http://www.chinanews.com.cn/gj/2023/01-27/9942249.shtml', 76),
('克宫：泽连斯基失去与普京对话资格 泽连斯基：不感兴趣', '2023-01-27 10:04:36', 'http://www.chinanews.com.cn/gj/2023/01-27/9942039.shtml', 77),
('紧盯“三个之变”，加快军事理论现代化', '2023-01-27 02:36:20', 'http://www.chinanews.com.cn/gn/2023/01-27/9941971.shtml', 78),
('俄乌局势进展：美德宣布向乌提供主战坦克 外媒称乌军证实撤离索列达尔', '2023-01-26 19:52:53', 'http://www.chinanews.com.cn/gj/2023/01-26/9941908.shtml', 79),
('不装了！美国、德国供乌克兰坦克', '2023-01-26 13:05:57', 'http://www.chinanews.com.cn/gj/2023/01-26/9941765.shtml', 80),
('美国宣布向乌克兰提供31辆主战坦克', '2023-01-26 06:30:32', 'http://www.chinanews.com.cn/gj/2023/01-26/9941632.shtml', 81),
('德国政府预计今年德国经济增长0.2%', '2023-01-26 02:55:37', 'http://www.chinanews.com.cn/gj/2023/01-26/9941607.shtml', 82),
('最新动态：德国决定向乌克兰提供“豹2”坦克 俄称看不到外交解决乌问题的前景', '2023-01-26 00:25:59', 'http://www.chinanews.com.cn/gj/2023/01-26/9941599.shtml', 83),
('俄乌局势进展：外媒称美德将向乌提供主战坦克 俄官员称俄罗斯武器供应充足', '2023-01-25 19:58:18', 'http://www.chinanews.com.cn/gj/2023/01-25/9941541.shtml', 84),
('德国终于松口援乌这一主战坦克！美国预计很快跟进！', '2023-01-25 19:09:16', 'http://www.chinanews.com.cn/gj/2023/01-25/9941539.shtml', 85),
('美国和德国为何一反常态准备向乌克兰提供主战坦克？', '2023-01-25 09:53:26', 'http://www.chinanews.com.cn/gj/2023/01-25/9941342.shtml', 86),
('德国防长：盟国可以开始训练乌克兰士兵使用“豹”式坦克', '2023-01-24 19:09:13', 'http://www.chinanews.com.cn/gj/2023/01-24/9941211.shtml', 87),
('俄乌局势进展：俄外长就谈判议题发声 欧盟同意进一步向乌提供援助', '2023-01-24 18:41:27', 'http://www.chinanews.com.cn/gj/2023/01-24/9941204.shtml', 88),
('虚伪双标 美国政府被曝操纵社交媒体', '2023-01-24 06:25:31', 'http://www.chinanews.com.cn/gj/2023/01-24/9941031.shtml', 89),
('最新动态：俄外长说乌可通过中间人澄清谈判前景 乌官员称今春至初夏为战局关键期', '2023-01-24 02:09:43', 'http://www.chinanews.com.cn/gj/2023/01-24/9940995.shtml', 90),
('俄外交部宣布降低与爱沙尼亚外交关系等级', '2023-01-23 21:00:48', 'http://www.chinanews.com.cn/gj/2023/01-23/9940975.shtml', 91),
('俄乌局势进展：法德两国承诺坚定支持乌克兰 俄警告对乌军援将导致“全球悲剧”', '2023-01-23 20:08:49', 'http://www.chinanews.com.cn/gj/2023/01-23/9940937.shtml', 92),
('日本第211届例行国会开幕 岸田文雄发表施政演说', '2023-01-23 19:30:52', 'http://www.chinanews.com.cn/gj/2023/01-23/9940920.shtml', 93),
('俄乌谈判时间是否来临？克宫：目前不具备任何条件', '2023-01-23 19:28:48', 'http://www.chinanews.com.cn/gj/2023/01-23/9940919.shtml', 94),
('泽连斯基“盯”上德制豹2型坦克，德国能否“松口”？', '2023-01-23 18:18:00', 'http://www.chinanews.com.cn/gj/2023/01-23/9940907.shtml', 95),
('日本第211届例行国会开幕 岸田文雄发表施政方针演说', '2023-01-23 17:14:02', 'http://www.chinanews.com.cn/gj/2023/01-23/9940888.shtml', 96),
('俄乌局势进展：泽连斯基称俄破坏全球粮食市场  RT法国频道账户遭冻结而关闭', '2023-01-22 19:46:05', 'http://www.chinanews.com.cn/gj/2023/01-22/9940546.shtml', 97),
('俄乌局势进展：德国未与盟友就向乌提供坦克达成一致  俄指责乌主战派拒绝对话', '2023-01-21 19:15:35', 'http://www.chinanews.com.cn/gj/2023/01-21/9940174.shtml', 98),
('50国国防官员相聚德国，只为讨论这件事儿', '2023-01-20 22:27:00', 'http://www.chinanews.com.cn/gj/2023/01-20/9939901.shtml', 99),
('俄乌局势进展：美对乌新一批军援未包括坦克  北约称将向乌提供重型武器', '2023-01-20 19:52:26', 'http://www.chinanews.com.cn/gj/2023/01-20/9939824.shtml', 100);

-- --------------------------------------------------------

--
-- 表的结构 `ourteammems`
--

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
('彭钰婷', 2013631, 3, '计算机科学与技术'),
('林语盈', 2012174, 4, '计算机科学与技术');

-- --------------------------------------------------------

--
-- 表的结构 `personhomework`
--

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
(1, '韩佳迅', '作业1(2012682_韩佳迅).zip', '作业2(2012682_韩佳迅).zip', '作业3(2012682_韩佳迅).zip', 'https://github.com/hanmaxmax'),
(2, '林语盈', '作业1(2012174_林语盈).zip', '作业2(2012174_林语盈).zip', '作业3(2012174_林语盈).zip', 'https://github.com/AldebaranL'),
(3, '彭钰婷', '作业1(2013631_彭钰婷).zip', '作业2(2013631_彭钰婷).zip', '作业3(2013631_彭钰婷).zip', 'https://github.com/tttran67'),
(4, '姚鑫', '作业1(2014089_姚鑫).zip', '作业2(2014089_姚鑫).zip', '作业3(2014089_姚鑫).zip', 'https://github.com/yx66667');

-- --------------------------------------------------------

--
-- 表的结构 `tb_user_authority`
--

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

CREATE TABLE `teamhomework` (
  `num_id` int NOT NULL COMMENT '序号',
  `name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL COMMENT '作业名称',
  `position` varchar(100) COLLATE utf8mb4_general_ci NOT NULL COMMENT '文件名称'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='团队作业';

--
-- 转存表中的数据 `teamhomework`
--

INSERT INTO `teamhomework` (`num_id`, `name`, `position`) VALUES
(1, '需求文档', 'NKU-HLPY_需求文档(2012682_2012174_2013631_2014089).pdf'),
(2, '设计文档', 'NKU-HLPY_设计文档(2012682_2012174_2013631_2014089).pdf'),
(3, '实现文档', 'NKU-HLPY_实现文档(2012682_2012174_2013631_2014089).pdf'),
(4, '用户手册', 'NKU-HLPY_用户手册(2012682_2012174_2013631_2014089).pdf'),
(5, '部署文档', 'NKU-HLPY_部署文档(2012682_2012174_2013631_2014089).pdf'),
(6, '项目展示PPT', 'NKU-HLPY_项目展示PPT(2012682_2012174_2013631_2014089).pptx');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

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
  MODIFY `num_id` int NOT NULL AUTO_INCREMENT COMMENT '序号', AUTO_INCREMENT=101;

--
-- 使用表AUTO_INCREMENT `ourteammems`
--
ALTER TABLE `ourteammems`
  MODIFY `num_id` int NOT NULL AUTO_INCREMENT COMMENT '序号', AUTO_INCREMENT=5;

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
