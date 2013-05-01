<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>王仕军的个人简历</title>
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
    <link rel="stylesheet" href="css/resume.css" />
    <script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
</head>
<body>

<div data-role="page" class="home" id="home">

    <div data-role="content">
        <p class="version">前端工程师</p>
        <p id="contactme">
            <a href="mailto:wangshijun2010@gmail.com" title="wangshijun2010@gmail.com"><img src="img/email.png" alt="给我发邮件"></a>
            <a href="tel:15811057083"><img src="img/phone.png" alt="给我打电话"></a>
        </p>

        <div id="homeheader">
            <h1 id="logo"><img src="img/avatar.jpg" alt="我的证件照" width="150" height="194" /></h1>
            <p>王仕军<small>（男·25·硕士·党员）</small></p>
        </div>

        <p class="intro">具有4年以上PHP开发经验，1年大型科技公司实习经验，8个以上中小项目设计和实施经验；具有良好的编码和重构习惯，熟悉面向对象和设计模式。<span class="label label-info">求职目标</span>为：PHP应用研发、WEB前端开发等技术应用类职务。</p>

        <div data-role="collapsible-set" data-theme="c" data-content-theme="d" class="ui-collapsible-set">

            <div data-role="collapsible" data-inset="false" data-content-theme="c" data-iconpos="right" data-collapsed-icon="arrow-r" data-expanded-icon="arrow-d" id="skills">
                <h2 class="title">个人技能<small>Skill</small></h2>
                <ul>
                    <li>熟练运用<strong>HTML</strong>、CSS设计和美化网页，了解W3C标准，正在学习CSS3，HTML5；</li>
                    <li>熟悉<strong>Javascript</strong>及开源库jQuery、Zepto、Prototype，了解NodeJS、RequireJS等技术；</li>
                    <li>熟悉<strong>PHP</strong>及开源项目CakePHP、Yii、PHPUnit、Smarty、PHPDocumentor的使用；</li>
                    <li>熟悉<strong>MySQL</strong>及其基本的优化方法并有300W+数据库的优化经验，了解NoSQL；</li>
                    <li>熟悉<strong>Linux</strong>系统常用命令，能进行Apache、Nginx服务器的简单配置和性能调优；</li>
                    <li>熟悉前端<strong>调试工具</strong>Firebug、Chrome；能使用YSlow、XDebug等进行<strong>性能分析</strong>；</li>
                    <li>熟悉<strong>版本控制</strong>系统Subversion的配置使用，了解github和googlecode等服务；</li>
                    <li>熟悉<strong>面向对象</strong>和<strong>设计模式</strong>，具有良好代码编写和<strong>重构习惯</strong>，了解敏捷开发理念和实践；</li>
                    <li>了解WEB应用常见的<strong>安全</strong>隐患（XSS、SQL注入）和应对策略；</li>
                    <li>英语六级（585分），听说读写能力佳，丰富的<strong>英文技术文档阅读经验</strong>（30本以上）；</li>
                    <li>良好的<strong>时间管理</strong>、<strong>任务管理</strong>能力，依照GTD原则进行日常事务的管理。</li>
                </ul>
            </div>

            <div data-role="collapsible" data-inset="false" data-content-theme="c" data-iconpos="right" data-collapsed-icon="arrow-r" data-expanded-icon="arrow-d" id="internship">
                <h2 class="title">实习经历<small>Internship</small></h2>
                <div class="subsection">
                    <h3>
                        <span class="date span3">2012.07~2012.09</span>
                        <span class="company span4">百度在线网络技术有限公司</span>
                        <span class="department">贴吧技术部</span>
                    </h3>
                    <ul>
                        <li>利用Hadoop从贴吧数据仓库中抽取信息，进行盗号用户行为挖掘；</li>
                        <li>负责部分贴吧反作弊MIS新功能开发上线、及日常维护和bugfix；</li>
                        <li>使用的语言和技术：Hadoop、Hive、MySQL、PHP。</li>
                    </ul>
                </div>
                <div class="subsection">
                    <h3>
                        <span class="date span3">2011.07~2012.06</span>
                        <span class="company span4">淘宝（北京）技术有限公司</span>
                        <span class="department">搜索应用研发部</span>
                    </h3>
                    <ul>
                        <li>设计出运营工具的MVC架构、使用Sphinx为产品库提速（80%以上）；</li>
                        <li>设计出2个业务相关jQuery插件，以及可作为服务使用的权限控制模块；</li>
                        <li>承担etao机票搜索前端开发工作，用PHP QA工具集提高etao代码质量；</li>
                        <li>使用的语言和技术：MVC、PHP、MySQL、Sphinx、jQuery、Bootstrap。</li>
                    </ul>
                </div>
            </div>

            <div data-role="collapsible" data-inset="false" data-content-theme="c" data-iconpos="right" data-collapsed-icon="arrow-r" data-expanded-icon="arrow-d" id="projects">
                <h2 class="title">项目经历<small>Projects</small></h2>
                <div class="subsection">
                    <h3>
                        <span class="date span3">2011.05~2011.06</span>
                        <span class="company">大连东特集团短租房网站精租客<span class="label label-warning visible-desktop">人月神话</span></span>
                    </h3>
                    <ul>
                        <li><span class="label label-info">开发工程师</span>，全面负责项目实施、与WD的协作以及与需求方的对接；</li>
                        <li>对CakePHP进行了5项以上的定制和扩展，并将其CKEditor、CKFinder整合；</li>
                        <li>使用的语言和技术：PHP、CakePHP、Memcache、Google Map API、Alipay API。</li>
                    </ul>
                </div>
                <div class="subsection">
                    <h3>
                        <span class="date span3">2011.04~2011.05</span>
                        <span class="company">大连理工大学建党九十周年知识竞赛在线答题系统</span>
                    </h3>
                    <ul>
                        <li><span class="label label-info">开发工程师</span>，全面负责项目进度以及与美工的沟通和合作；</li>
                        <li>负责需求分析、数据库设计、程序设计及系统安装中的大部分工作；</li>
                        <li>使用的语言和技术：PHP、MySQL、jQuery、Ajax。</li>
                    </ul>
                </div>
                <div class="subsection">
                    <h3>
                        <span class="date span3">2010.06~2010.09</span>
                        <span class="company">天津市华信通科技有限公司网站升级</span>
                    </h3>
                    <ul>
                        <li><span class="label label-info">前端工程师</span>，全面负责网站改版及4人团队的协调工作；</li>
                        <li>负责前端模板设计和网站新旧版本网站的备份升级工作；</li>
                        <li>使用的语言和技术：PHP、MySQL、Smarty、jQuery。</li>
                    </ul>
                </div>
                <div class="subsection">
                    <h3>
                        <span class="date span3">2009.10~2009.12</span>
                        <span class="company">北京理工大学管理学院就业信息平台开发</span>
                    </h3>
                    <ul>
                        <li><span class="label label-info">开发工程师</span>，全面负责项目进度以及3人项目团队的协调工作；</li>
                        <li>负责需求分析、系统设计、系统实施及测试中的大部分工作；</li>
                        <li>使用的语言和技术：PHP、MySQL、CakePHP、jQuery、CKEditor。</li>
                    </ul>
                </div>
            </div>

            <div data-role="collapsible" data-inset="false" data-content-theme="c" data-iconpos="right" data-collapsed-icon="arrow-r" data-expanded-icon="arrow-d" id="education">
                <h2 class="title">教育背景<small>Education</small></h2>
                <ul>
                    <li>2010.09~2013.03 &nbsp;&nbsp;&nbsp;&nbsp; 硕士 &nbsp;&nbsp;&nbsp;&nbsp; 北京理工大学 &nbsp;&nbsp;&nbsp;&nbsp; 管理科学与工程 &nbsp;&nbsp;&nbsp;&nbsp; 数据挖掘方向</li>
                    <li>2006.09~2010.07 &nbsp;&nbsp;&nbsp;&nbsp; 学士 &nbsp;&nbsp;&nbsp;&nbsp; 北京理工大学 &nbsp;&nbsp;&nbsp;&nbsp; 信息管理与信息系统 &nbsp;&nbsp;&nbsp;&nbsp; 排名：前5%（40人）</li>
                    <li>主修课程：统计学、数据库原理、系统分析与设计、数据挖掘、人工智能、信息检索；</li>
                    <li>自修内容：PHP、Javascript、CSS、HTML、MySQL、Linux、设计模式、代码重构。</li>
                </ul>
            </div>

            <div data-role="collapsible" data-inset="false" data-content-theme="c" data-iconpos="right" data-collapsed-icon="arrow-r" data-expanded-icon="arrow-d" id="honours">
                <h2 class="title">获奖情况<small>Honor</small></h2>
                <ul>
                    <li>2010年06月，被评为北京市优秀毕业生和北京理工大学优秀学生（获奖比例5%）；</li>
                    <li>2008年10月，教育部国家奖学金（1次，获奖比例1%）；</li>
                    <li>2007至2009年，北京理工大学优秀学生荣誉称号（2次，获奖比例3%）；</li>
                    <li>2007至2009年，曾宪梓优秀大学生奖学金（3次，获奖比例3%）；</li>
                    <li>2006至2009年，北京理工大学优秀学生奖学金（一等3次，获奖比例5%；二等奖4次，获奖比例15%）。</li>
                </ul>
            </div>

            <div data-role="collapsible" data-inset="false" data-content-theme="c" data-iconpos="right" data-collapsed-icon="arrow-r" data-expanded-icon="arrow-d" id="evaluation">
                <h2 class="title">自我评价<small>Evaluation</small></h2>
                <ul>
                    <li>强烈的工作责任感和上进心，做事稳重；</li>
                    <li>为人真诚、诚实守信，善于与人沟通、合作；</li>
                    <li>对技术的<span class="label label-info">浓厚兴趣</span>和<span class="label label-info">钻研精神</span>；</li>
                    <li>很强的<span class="label label-info">自学能力</span>，并能够持之以恒。</li>
                </ul>
            </div>

            <div data-role="collapsible" data-inset="false" data-content-theme="c" data-iconpos="right" data-collapsed-icon="arrow-r" data-expanded-icon="arrow-d" id="code">
                <h2 class="title">代码简历<small>Code</small></h2>
                <div class="links">
                    <a href="https://github.com/wangshijun2010" target="_blank">
                        <img src="img/github.png" alt="GitHub" title="wangshijun2010 on GitHub">
                    </a>
                    <a href="http://weibo.com/wangshijun2010" target="_blank">
                        <img src="img/weibo.png" alt="WeiBo" title="BIT王仕军">
                    </a>
                    <a href="http://wenda.hiall.com.cn/u/wangshijun" target="_blank">
                        <img src="img/wenda.png" alt="技能展示平台" title="技能展示平台">
                    </a>
                    <a href="http://code.google.com/u/wangshijun2010/" target="_blank">
                        <img src="img/google.png" alt="Google Code" title="Google Code">
                    </a>
                </div>
            </div>

            <div data-role="collapsible" data-inset="false" data-content-theme="c" data-iconpos="right" data-collapsed-icon="arrow-r" data-expanded-icon="arrow-d" id="contact">
                <h2 class="title">联系信息<small>Contact</small></h2>
                <div class="row">
                    <p>邮箱：<a href="mailto:wangshijun2010@gmail.com">wangshijun2010@gmail.com</a></p>
                    <p>电话：<a href="tel:15811057083">158-1105-7083</a></p>
                    <p>地址：北京市海淀区中关村南大街5号院北京理工大学新2号楼408室，100081</p>
                </div>
            </div>

        </div>

    </div><!-- /content -->

    <div data-role="footer" data-theme="c" class="footer">
        <p class="version">更新日期: <?php echo date('Y年m月d日', filemtime(__FILE__)); ?></p>
        <p>&copy; 2012 王仕军</p>
    </div><!-- /footer -->

</div>

<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function() {
        window.scrollTo(0, 1);
    }, false);
</script>

<?php include 'ga.php'; ?>

</body>
</html>
