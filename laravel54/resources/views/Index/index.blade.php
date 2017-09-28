@extends('head')
@section('content')
<script data-fixed="true">

//var UDB_SDK_SWTICH = true;

</script>

    <!-- E 通用头部 -->



    <div class="mod-index-wrap">



        <!-- S 主屏背景 -->

                <div id="banner" class="J_g_resource" data-pos="home/beitou" data-rsc="2111" style="background-image: url({{URL::asset('images/huya_1506047436_content.jpg')}});">

                            <a class="left-banner clickstat third-clickstat" id="J_adLeft" data-thirdview="" data-thirdstat="" eid="click/push/beitou/left" eid_desc="点击/推荐/背投/左侧" href="http://www.huya.com/s7" target="_blank"></a>

                                        <a class="right-banner clickstat third-clickstat" id="J_adRight" data-thirdstat="" eid="click/push/beitou/right" eid_desc="点击/推荐/背投/右侧" href="http://www.huya.com/s7" target="_blank"></a>

                    </div>

                <!-- E 主屏背景 -->



        <!-- S 播放器模块 -->

        <div class="mod-index-main" id="js-main">

    <div class="main-hd">

        <div class="main-player">

           <div id="index_player"></div>

        </div>

    </div>

     <div class="main-bd">

        <ul class="item-nav clearfix">

    <!--循环数据  热门直播的房间-->
                <li recommendSite="1" class="new-clickstat" report='{"eid":"click/position","position":"index/jdt/1","game_id":"1","ayyuid":"1346609715"}'>

                    <div class="item-pic">

                        <img src="{{URL::asset('images/home_recommend_live_web_1506141063.jpg')}}" alt="虎牙直播" onerror="this.onerror='';this.src='images/default_focus.jpg'">

                        <div class="highlight"><i class="arrow"></i></div>

                    </div>

                </li>

        <!--end-->                  

                    </ul>

    </div>

</div>



        <!-- E 播放器模块 -->



        <!-- S 游戏分类 -->

        <div class="mod-game-wrap">
<!--遍历渲染-->
    <div class="mod-game-type clearfix">

                <div class="game-classify" >

            <h3>

                <a href="http://www.huya.com/g/100023" target="_blank" class="new-clickstat" report='{"eid":"click/position","position":"index/remen/title1"}'>
                    <i style="background-image: url({{URL::asset('//livewebbs2.msstatic.com/huya_hot_rec_theme_logo_1488335027.png')}})"></i>
                    网游竞技</a>

            </h3>

                        <ul class="game-classify-list clearfix">

                                <li>

                    <a href="http://www.huya.com/dizong" target="_blank" class="new-clickstat" report='{"eid":"click/position","position":"index/remen/1-1","game_id":"9","ayyuid":"791848733"}'>

                        <div class="img-box">

                            <img class="pic" src="{{URL::asset('other/1')}}" alt="标题再叼有啥用 主要是人帅车快的直播"  title="标题再叼有啥用 主要是人帅车快的直播">

                        </div>                       

                        <span class="game-type">QQ飞车</span>

                        <div class="item-mask"></div>

                        <i class="btn-link__hover_i"></i>

                        <div class="game-classify-name">标题再叼有啥用 主要是人帅车快</div>

                    </a>

                </li>

                                
                   

            </ul>

                    </div>



</div>



        <!-- E 游戏分类 -->



        <div class="box-placeholder"></div>





            <!-- S 信息模块 -->
<div class="mod-news-section clearfix">

                <!--S 推广 -->

            <div class="index-recommend-img" id="J_recImg">

    <div class="wrap">

        <a class="link pic-box clickstat third-clickstat pic1" id="J_thirdView_1" title="S7全球总决赛" href="http://blog.huya.com/news/4556" target="_blank" eid="click/push/indexnews/picture1" eid_desc="点击/活动/首页新闻/图片1" data-thirdstat="" data-thirdview=""><img src="{{URL::asset('images/huya_1506075209_content.jpg')}}" onerror="this.onerror=null;this.src='images/330x210.jpg';" alt="S7全球总决赛">
        </a>
    </div>



              
    </div>

</div>

                <!-- E 节目预告 -->

            </div>

            <!-- E 信息模块 -->



            <div class="mod-index-list mod-index-recommend clearfix">

                <!-- S 热门分类 -->

                <div class="nav-recommend">

        <div class="box recommend-box">

        <div class="box-hd">

            <h2 class="title"><span class="hy-column-icon hy-column-game"></span><a href="http://www.huya.com/g" target="_blank">热门分类</a></h2>

            <a class="more-info" href="http://www.huya.com/g" target="_blank">更多<i class="index-more-icon"></i></a>

            <span class="box-hd-tip">当前共有<strong>328</strong>款游戏直播</span>

        </div>

        <div class="box-bd">

            <style>.game-list-item{float:left;overflow:hidden;width:134px;margin:0 18px 20px 0;font-size:12px;vertical-align:top;letter-spacing:normal;word-spacing:normal;border:2px solid #F7F7F7;background:#FFF;-moz-box-sizing:border-box;box-sizing:border-box}.game-list-item *{-moz-box-sizing:border-box;box-sizing:border-box}.game-list-item:hover{border-color:#f80}.game-list-item .pic{display:block;width:100%;height:100%}.game-list-item .pic .pic-img{width:100%}.game-list-item .title{display:block;overflow:hidden;margin:6px 0 4px;font-size:14px;-webkit-transition:color .2s ease-out;transition:color .2s ease-out;text-align:center;white-space:nowrap;text-overflow:ellipsis;-ms-text-overflow:ellipsis;word-wrap:normal;color:#555;-o-text-overflow:ellipsis}.game-list-item:hover .pic-img{opacity:.7;filter:alpha(opacity=70)}.game-list-item:hover .title{text-decoration:none;color:#f80}</style>

            <ul class="game-list clearfix">

             <li class="game-list-item" gid="1">

                    <a target="_blank" href="http://www.huya.com/g/lol" class="pic new-clickstat" report='{"eid":"click/postion","position":"index/gameCard/1","game_id":"1"}'>

                    <img class="pic-img" data-original="//huyaimg.msstatic.com/cdnimage/game/1-S.jpg?t=1506337200" src="{{URL::asset('images/240x360.jpg')}}" onerror="this.onerror=null; this.src='images/240x360.jpg';" alt="英雄联盟" title="英雄联盟">

                    <h3 class="title">英雄联盟</h3>

                </a>

            </li>

                                                       

                                </ul>

        </div>

    </div>

    </div>

                <!-- E 热门分类 -->



                <!-- S 明星大神模块 -->

<div class="star-box">

    <div class="star-hd">

        <a class="star-hd-link" href="http://www.huya.com/e/zhubo" target="_blank">成为主播 <i class="index-more-icon"></i></a>

        <h2 class="title"><span class="hy-column-icon hy-column-start"></span><a target="_blank" href="http://www.huya.com/l#tag51" class="star-title-link hiido_stat clickstat" hiido_code="10005721" eid="click/home/dashen" eid_desc="点击/首页/明星大神">明星大神</a></h2>

    </div>

    <div class="star-bd">

        <div class="star-content">

            <ul class="star-list clearfix">

                            <li class="star-item">

                    <a  class="star-link clickstat" href="http://www.huya.com/saonan" target="_blank" eid="click/home/dashen/dashen1" eid_desc="点击/首页/大神/大神1" >

                        <div class="pic">

                            <!-- <img data-original="//livewebbs2.msstatic.com/huya_famous_b_770276_b1486977345.png" src="{{URL::asset('images/84x84.jpg')}}" onerror="this.onerror=null; alert(1); this.src='{{URL::asset('images/84x84.jpg')}}';" alt="骚男的直播" title="骚男的直播"> -->

                        </div>

                                                    <i class="live-flag"><span class="live-icon"></span>直播</i>

                                                <div class="text">

                            <h3 class="star-name">骚男</h3>

                            <div class="star-info" title="天有多高，手有多骚，英雄联盟人气主播，行走的表情包。">

                                天有多高，手有多骚，英雄联盟人气主播，行走的表情包。                            </div>

                        </div>

                    </a>

                </li>

                            <li class="star-item">

                    <a  class="star-link clickstat" href="http://www.huya.com/sgjsheng" target="_blank" eid="click/home/dashen/dashen2" eid_desc="点击/首页/大神/大神2" >

                        <div class="pic">
 
                            <img data-original="//livewebbs2.msstatic.com/huya_famous_b_10064_b1464780675.jpg" src="{{URL::asset('images/84x84.jpg')}}" onerror="this.onerror=null;alert(1); this.src='images/84x84.jpg';" alt="贱圣的直播" title="贱圣的直播">

                        </div>

                                                    <i class="live-flag"><span class="live-icon"></span>直播</i>

                                                <div class="text">

                            <h3 class="star-name">贱圣</h3>

                            <div class="star-info" title="小贱贱，主机党实力主播，著名游戏导演。">

                                小贱贱，主机党实力主播，著名游戏导演。                            </div>

                        </div>

                    </a>

                </li>

                            <li class="star-item">

                    <a  class="star-link clickstat" href="http://www.huya.com/dongxiaosa" target="_blank" eid="click/home/dashen/dashen3" eid_desc="点击/首页/大神/大神3" >

                        <div class="pic">

                            <!-- <img data-original="//livewebbs2.msstatic.com/huya_famous_b_917707_b1464780837.jpg" src="images/84x84.jpg" onerror="this.onerror=null; alert(1); this.src='images/84x84.jpg';" alt="董小飒的直播" title="董小飒的直播"> -->

                        </div>

                                                    <i class="live-flag"><span class="live-icon"></span>直播</i>

                                                <div class="text">

                            <h3 class="star-name">董小飒</h3>

                            <div class="star-info" title="连续两届YSL冠军得主，年度最受欢迎男主播。">

                                连续两届YSL冠军得主，年度最受欢迎男主播。                            </div>

                        </div>

                    </a>

                </li>

                            <li class="star-item">

                    <a  class="star-link clickstat" href="http://www.huya.com/a16789" target="_blank" eid="click/home/dashen/dashen4" eid_desc="点击/首页/大神/大神4" >

                        <div class="pic">

                            <!-- <img data-original="//livewebbs2.msstatic.com/huya_famous_b_1391089114_b1465291548.jpg" src="images/84x84.jpg" onerror="this.onerror=null; alert(1); this.src='images/84x84.jpg';" alt="安德罗妮的直播" title="安德罗妮的直播"> -->

                        </div>

                                                    <i class="live-flag"><span class="live-icon"></span>直播</i>

                                                <div class="text">

                            <h3 class="star-name">安德罗妮</h3>

                            <div class="star-info" title="炉石传说一哥，神抽狗协会会长，麾下十万军师。">

                                炉石传说一哥，神抽狗协会会长，麾下十万军师。                            </div>

                        </div>

                    </a>

                </li>

                            <li class="star-item">

                    <a  class="star-link clickstat" href="http://www.huya.com/qingfeng" target="_blank" eid="click/home/dashen/dashen5" eid_desc="点击/首页/大神/大神5" >

                        <div class="pic">

                            <!-- <img data-original="//livewebbs2.msstatic.com/huya_famous_b_1862797660_b1478661619.jpg" src="images/84x84.jpg" onerror="this.onerror=null; alert(1); this.src='images/84x84.jpg';" alt="清风徐来的直播" title="清风徐来的直播"> -->

                        </div>

                                                    <i class="live-flag"><span class="live-icon"></span>直播</i>

                                                <div class="text">

                            <h3 class="star-name">清风徐来</h3>

                            <div class="star-info" title="球球粉丝眼里的老大，王祖蓝心中的大神。">

                                球球粉丝眼里的老大，王祖蓝心中的大神。                            </div>

                        </div>

                    </a>

                </li>

                            <li class="star-item">

                    <a  class="star-link clickstat" href="http://www.huya.com/magicwin" target="_blank" eid="click/home/dashen/dashen6" eid_desc="点击/首页/大神/大神6" >

                        <div class="pic">

                            <!-- <img data-original="//livewebbs2.msstatic.com/huya_famous_b_1681435395_b1464780769.jpg" src="images/84x84.jpg" onerror="this.onerror=null; alert(1); this.src='images/84x84.jpg';" alt="魔法之风的直播" title="魔法之风的直播"> -->

                        </div>

                                                    <i class="live-flag"><span class="live-icon"></span>直播</i>

                                                <div class="text">

                            <h3 class="star-name">魔法之风</h3>

                            <div class="star-info" title="中国炉石选手的外战英雄，世界第八的顶尖高手。">

                                中国炉石选手的外战英雄，世界第八的顶尖高手。                            </div>

                        </div>

                    </a>

                </li>

                            <li class="star-item">

                    <a  class="star-link clickstat" href="http://www.huya.com/jieshuolixiang" target="_blank" eid="click/home/dashen/dashen7" eid_desc="点击/首页/大神/大神7" >

                        <div class="pic">

                            <!-- <img data-original="//livewebbs2.msstatic.com/huya_famous_b_42234231_b1479267889.jpg" src="images/84x84.jpg" onerror="this.onerror=null; alert(1); this.src='images/84x84.jpg';" alt="理想的直播" title="理想的直播"> -->

                        </div>

                                                    <i class="live-flag"><span class="live-icon"></span>直播</i>

                                                <div class="text">

                            <h3 class="star-name">理想</h3>

                            <div class="star-info" title="球球BPL官方解说，球球乱不乱，想哥“说“了算。">

                                球球BPL官方解说，球球乱不乱，想哥“说“了算。                            </div>

                        </div>

                    </a>

                </li>

                            <li class="star-item">

                    <a  class="star-link clickstat" href="http://www.huya.com/daoyu" target="_blank" eid="click/home/dashen/dashen8" eid_desc="点击/首页/大神/大神8" >

                        <div class="pic">

                            <!-- <img data-original="//livewebbs2.msstatic.com/huya_famous_b_26842324_b1480057519.jpg" src="images/84x84.jpg" onerror="this.onerror=null; alert(1); this.src='images/84x84.jpg';" alt="岛屿的直播" title="岛屿的直播"> -->

                        </div>

                                                    <i class="live-flag"><span class="live-icon"></span>直播</i>

                                                <div class="text">

                            <h3 class="star-name">岛屿</h3>

                            <div class="star-info" title="国民男友，球球大作战大手子。">

                                国民男友，球球大作战大手子。                            </div>

                        </div>

                    </a>

                </li>

                            <li class="star-item">

                    <a  class="star-link clickstat" href="http://www.huya.com/bugqiu" target="_blank" eid="click/home/dashen/dashen9" eid_desc="点击/首页/大神/大神9" >

                        <div class="pic">

                            <!-- <img data-original="//livewebbs2.msstatic.com/huya_famous_b_1313214123_b1464780733.jpg" src="images/84x84.jpg" onerror="this.onerror=null; alert(1); this.src='images/84x84.jpg';" alt="仇东生的直播" title="仇东生的直播"> -->

                        </div>

                                                    <i class="live-flag"><span class="live-icon"></span>直播</i>

                                                <div class="text">

                            <h3 class="star-name">仇东生</h3>

                            <div class="star-info" title="BUG仇，DNF世界冠军，世界第一魔道，抗韩第一人。">

                                BUG仇，DNF世界冠军，世界第一魔道，抗韩第一人。                            </div>

                        </div>

                    </a>

                </li>

                            <li class="star-item">

                    <a  class="star-link clickstat" href="http://www.huya.com/uzi" target="_blank" eid="click/home/dashen/dashen10" eid_desc="点击/首页/大神/大神10" >

                        <div class="pic">

                            <!-- <img data-original="//livewebbs2.msstatic.com/huya_famous_b_1927556408_b1484711021.jpg" src="images/84x84.jpg" onerror="this.onerror=null; alert(1); this.src='images/84x84.jpg';" alt="Uzi的直播" title="Uzi的直播"> -->

                        </div>

                                                <div class="text">

                            <h3 class="star-name">Uzi</h3>

                            <div class="star-info" title="小狗，世界第一ADC，2016LOL全明星Solo冠军。">

                                小狗，世界第一ADC，2016LOL全明星Solo冠军。                            </div>

                        </div>

                    </a>

                </li>

                            <li class="star-item">

                    <a  class="star-link clickstat" href="http://www.huya.com/miss" target="_blank" eid="click/home/dashen/dashen11" eid_desc="点击/首页/大神/大神11" >

                        <div class="pic">

                            <!-- <img data-original="//livewebbs2.msstatic.com/huya_famous_b_1639423385_b1464780786.jpg" src="images/84x84.jpg" onerror="this.onerror=null; alert(1); this.src='images/84x84.jpg';" alt="Miss大小姐的直播" title="Miss大小姐的直播"> -->

                        </div>

                                                <div class="text">

                            <h3 class="star-name">Miss大小姐</h3>

                            <div class="star-info" title="中国LOL第一女解说，国服最具人气女玩家。">

                                中国LOL第一女解说，国服最具人气女玩家。                            </div>

                        </div>

                    </a>

                </li>

                            <li class="star-item">

                    <a  class="star-link clickstat" href="http://www.huya.com/chuhe" target="_blank" eid="click/home/dashen/dashen12" eid_desc="点击/首页/大神/大神12" >

                        <div class="pic">

                            <!-- <img data-original="//livewebbs2.msstatic.com/huya_famous_b_229813522_b1464780659.jpg" src="images/84x84.jpg" onerror="this.onerror=null; alert(1); this.src='images/84x84.jpg';" alt="楚河的直播" title="楚河的直播"> -->

                        </div>

                                                <div class="text">

                            <h3 class="star-name">楚河</h3>

                            <div class="star-info" title="单机全能艺术家，世界挖掘机收藏家，直播三十年。">

                                单机全能艺术家，世界挖掘机收藏家，直播三十年。                            </div>

                        </div>

                    </a>

                </li>

                            <li class="star-item">

                    <a  class="star-link clickstat" href="http://www.huya.com/xiaoyugame" target="_blank" eid="click/home/dashen/dashen13" eid_desc="点击/首页/大神/大神13" >

                        <div class="pic">

                            <!-- <img data-original="//livewebbs2.msstatic.com/huya_famous_b_932805375_b1464780578.jpg" src="images/84x84.jpg" onerror="this.onerror=null; alert(1); this.src='images/84x84.jpg';" alt="小宇的直播" title="小宇的直播"> -->

                        </div>

                                                <div class="text">

                            <h3 class="star-name">小宇</h3>

                            <div class="star-info" title="热游直播代言人，虎牙单机COS直播爱好者。">

                                热游直播代言人，虎牙单机COS直播爱好者。                            </div>

                        </div>

                    </a>

                </li>

                            <li class="star-item">

                    <a  class="star-link clickstat" href="http://www.huya.com/board" target="_blank" eid="click/home/dashen/dashen14" eid_desc="点击/首页/大神/大神14" >

                        <div class="pic">

                            <!-- <img data-original="//livewebbs2.msstatic.com/huya_famous_b_79390772_b1465291599.jpg" src="images/84x84.jpg" onerror="this.onerror=null; alert(1); this.src='images/84x84.jpg';" alt="萌太奇的直播" title="萌太奇的直播"> -->

                        </div>

                                                <div class="text">

                            <h3 class="star-name">萌太奇</h3>

                            <div class="star-info" title="炉石传说一姐，江南小卖部老板娘，一孕傻三年。">

                                炉石传说一姐，江南小卖部老板娘，一孕傻三年。                            </div>

                        </div>

                    </a>

                </li>

                            <li class="star-item">

                    <a  class="star-link clickstat" href="http://www.huya.com/ktsmeb" target="_blank" eid="click/home/dashen/dashen15" eid_desc="点击/首页/大神/大神15" >

                        <div class="pic">

                            <!-- <img data-original="//livewebbs2.msstatic.com/huya_famous_b_2013047123_b1494577569.jpg" src="images/84x84.jpg" onerror="this.onerror=null; alert(1); this.src='images/84x84.jpg';" alt="Smeb的直播" title="Smeb的直播"> -->

                        </div>

                                                <div class="text">

                            <h3 class="star-name">Smeb</h3>

                            <div class="star-info" title="KT战队上单选手，世界第一上单">

                                KT战队上单选手，世界第一上单                            </div>

                        </div>

                    </a>

                </li>

                            <li class="star-item">

                    <a  class="star-link clickstat" href="http://www.huya.com/ktpawn" target="_blank" eid="click/home/dashen/dashen16" eid_desc="点击/首页/大神/大神16" >

                        <div class="pic">

                            <!-- <img data-original="//livewebbs2.msstatic.com/huya_famous_b_2013063494_b1494577685.jpg" src="images/84x84.jpg" onerror="this.onerror=null; alert(1); this.src='images/84x84.jpg';" alt="Pawn的直播" title="Pawn的直播"> -->

                        </div>

                                                <div class="text">

                            <h3 class="star-name">Pawn</h3>

                            <div class="star-info" title="KT战队中单选手，世界顶级中单选手，胖爹">

                                KT战队中单选手，世界顶级中单选手，胖爹                            </div>

                        </div>

                    </a>

                </li>

                            <li class="star-item">

                    <a  class="star-link clickstat" href="http://www.huya.com/ktdeft" target="_blank" eid="click/home/dashen/dashen17" eid_desc="点击/首页/大神/大神17" >

                        <div class="pic">

                            <!-- <img data-original="//livewebbs2.msstatic.com/huya_famous_b_2013074130_b1494577911.jpg" src="images/84x84.jpg" onerror="this.onerror=null; alert(1); this.src='images/84x84.jpg';" alt="Deft的直播" title="Deft的直播"> -->

                        </div>

                                                <div class="text">

                            <h3 class="star-name">Deft</h3>

                            <div class="star-info" title="KT战队ADC，世界顶级ADC，羊驼">

                                KT战队ADC，世界顶级ADC，羊驼                            </div>

                        </div>

                    </a>

                </li>

                            <li class="star-item">

                    <a  class="star-link clickstat" href="http://www.huya.com/ktmata" target="_blank" eid="click/home/dashen/dashen18" eid_desc="点击/首页/大神/大神18" >

                        <div class="pic">

                            <!-- <img data-original="//livewebbs2.msstatic.com/huya_famous_b_2013047662_b1494577937.jpg" src="images/84x84.jpg" onerror="this.onerror=null; alert(1); this.src='images/84x84.jpg';" alt="Mata的直播" title="Mata的直播"> -->

                        </div>

                                                <div class="text">

                            <h3 class="star-name">Mata</h3>

                            <div class="star-info" title="KT战队辅助选手，世界顶尖辅助，英雄海">

                                KT战队辅助选手，世界顶尖辅助，英雄海                            </div>

                        </div>

                    </a>

                </li>

                            <li class="star-item">

                    <a  class="star-link clickstat" href="http://www.huya.com/ktscore" target="_blank" eid="click/home/dashen/dashen19" eid_desc="点击/首页/大神/大神19" >

                        <div class="pic">

                            <!-- <img data-original="//livewebbs2.msstatic.com/huya_famous_b_2013048177_b1494577960.jpg" src="images/84x84.jpg" onerror="this.onerror=null; alert(1); this.src='images/84x84.jpg';" alt="Score的直播" title="Score的直播"> -->

                        </div>

                                                <div class="text">

                            <h3 class="star-name">Score</h3>

                            <div class="star-info" title="KT战队打野选手，原KTB战队AD，后转型打野">

                                KT战队打野选手，原KTB战队AD，后转型打野                            </div>

                        </div>

                    </a>

                </li>

                            <li class="star-item">

                    <a  class="star-link clickstat" href="http://www.huya.com/xinghen" target="_blank" eid="click/home/dashen/dashen20" eid_desc="点击/首页/大神/大神20" >

                        <div class="pic">

                            <!-- <img data-original="//livewebbs2.msstatic.com/huya_famous_b_383757_b1464780390.jpg" src="images/84x84.jpg" onerror="this.onerror=null; alert(1); this.src='images/84x84.jpg';" alt="星痕的直播" title="星痕的直播"> -->

                        </div>

                                                <div class="text">

                            <h3 class="star-name">星痕</h3>

                            <div class="star-info" title="专业OB韩服高端局解说，语速极快。">

                                专业OB韩服高端局解说，语速极快。                            </div>

                        </div>

                    </a>

                </li>

                            <li class="star-item">

                    <a  class="star-link clickstat" href="http://www.huya.com/yumiko" target="_blank" eid="click/home/dashen/dashen21" eid_desc="点击/首页/大神/大神21" >

                        <div class="pic">

                            <!-- <img data-original="//livewebbs2.msstatic.com/huya_famous_b_635563237_b1464780407.jpg" src="images/84x84.jpg" onerror="this.onerror=null; alert(1); this.src='images/84x84.jpg';" alt="Yumiko的直播" title="Yumiko的直播"> -->

                        </div>

                                                <div class="text">

                            <h3 class="star-name">Yumiko</h3>

                            <div class="star-info" title="前魔兽争霸3职业选手，WC3L世界总决赛亚军。">

                                前魔兽争霸3职业选手，WC3L世界总决赛亚军。                            </div>

                        </div>

                    </a>

                </li>

                            <li class="star-item">

                    <a  class="star-link clickstat" href="http://www.huya.com/qicai" target="_blank" eid="click/home/dashen/dashen22" eid_desc="点击/首页/大神/大神22" >

                        <div class="pic">

                            <!-- <img data-original="//livewebbs2.msstatic.com/huya_famous_b_900586_b1474181104.jpg" src="images/84x84.jpg" onerror="this.onerror=null; alert(1); this.src='images/84x84.jpg';" alt="七彩的直播" title="七彩的直播"> -->

                        </div>

                                                <div class="text">

                            <h3 class="star-name">七彩</h3>

                            <div class="star-info" title="虎牙剑灵第一人气主播，黑风魔女世界首杀带领者。">

                                虎牙剑灵第一人气主播，黑风魔女世界首杀带领者。                            </div>

                        </div>

                    </a>

                </li>

                            <li class="star-item">

                    <a  class="star-link clickstat" href="http://www.huya.com/xuanxing" target="_blank" eid="click/home/dashen/dashen23" eid_desc="点击/首页/大神/大神23" >

                        <div class="pic">

                            <!-- <img data-original="//livewebbs2.msstatic.com/huya_famous_b_1718236446_b1479114243.jpg" src="images/84x84.jpg" onerror="this.onerror=null; alert(1); this.src='images/84x84.jpg';" alt="炫星的直播" title="炫星的直播"> -->

                        </div>

                                                <div class="text">

                            <h3 class="star-name">炫星</h3>

                            <div class="star-info" title="球球第一主播，Huya619战队队员，BGF最佳人气选手。">

                                球球第一主播，Huya619战队队员，BGF最佳人气选手。                            </div>

                        </div>

                    </a>

                </li>

                            <li class="star-item">

                    <a  class="star-link clickstat" href="http://www.huya.com/lijiu" target="_blank" eid="click/home/dashen/dashen24" eid_desc="点击/首页/大神/大神24" >

                        <div class="pic">

                            <!-- <img data-original="//livewebbs2.msstatic.com/huya_famous_b_1841420205_b1477022367.jpg" src="images/84x84.jpg" onerror="this.onerror=null; alert(1); this.src='images/84x84.jpg';" alt="李九的直播" title="李九的直播"> -->

                        </div>

                                                <div class="text">

                            <h3 class="star-name">李九</h3>

                            <div class="star-info" title="王者第一专业官方解说，专研战队战术，套路王。">

                                王者第一专业官方解说，专研战队战术，套路王。                            </div>

                        </div>

                    </a>

                </li>

                            <li class="star-item">

                    <a  class="star-link clickstat" href="http://www.huya.com/badao" target="_blank" eid="click/home/dashen/dashen25" eid_desc="点击/首页/大神/大神25" >

                        <div class="pic">

                            <!-- <img data-original="//livewebbs2.msstatic.com/huya_famous_b_13955_b1464780855.jpg" src="images/84x84.jpg" onerror="this.onerror=null; alert(1); this.src='images/84x84.jpg';" alt="霸道的直播" title="霸道的直播"> -->

                        </div>

                                                <div class="text">

                            <h3 class="star-name">霸道</h3>

                            <div class="star-info" title="DNF知名土豪，毁区第一人，支撑直播界半壁江山。">

                                DNF知名土豪，毁区第一人，支撑直播界半壁江山。                            </div>

                        </div>

                    </a>

                </li>

                            <li class="star-item">

                    <a  class="star-link clickstat" href="http://www.huya.com/longdd" target="_blank" eid="click/home/dashen/dashen26" eid_desc="点击/首页/大神/大神26" >

                        <div class="pic">

                            <!-- <img data-original="//livewebbs2.msstatic.com/huya_famous_b_14837713_b1464780643.jpg" src="images/84x84.jpg" onerror="this.onerror=null; alert(1); this.src='images/84x84.jpg';" alt="longdd的直播" title="longdd的直播"> -->

                        </div>

                                                <div class="text">

                            <h3 class="star-name">longdd</h3>

                            <div class="star-info" title="龙弟弟，DOTA职业选手，DOTA界元老之一。">

                                龙弟弟，DOTA职业选手，DOTA界元老之一。                            </div>

                        </div>

                    </a>

                </li>

                            <li class="star-item">

                    <a  class="star-link clickstat" href="http://www.huya.com/peixiaofeng" target="_blank" eid="click/home/dashen/dashen27" eid_desc="点击/首页/大神/大神27" >

                        <div class="pic">

                            <!-- <img data-original="//livewebbs2.msstatic.com/huya_famous_b_1773664461_b1477560199.jpg" src="images/84x84.jpg" onerror="this.onerror=null; alert(1); this.src='images/84x84.jpg';" alt="裴小峰的直播" title="裴小峰的直播"> -->

                        </div>

                                                <div class="text">

                            <h3 class="star-name">裴小峰</h3>

                            <div class="star-info" title="游戏达人，原创游戏解说，王者荣耀核心玩家。">

                                游戏达人，原创游戏解说，王者荣耀核心玩家。                            </div>

                        </div>

                    </a>

                </li>

                            <li class="star-item">

                    <a  class="star-link clickstat" href="http://www.huya.com/ybg2017" target="_blank" eid="click/home/dashen/dashen28" eid_desc="点击/首页/大神/大神28" >

                        <div class="pic">

                            <!-- <img data-original="//livewebbs2.msstatic.com/huya_famous_b_290583883_b1505902739.jpg" src="images/84x84.jpg" onerror="this.onerror=null; alert(1); this.src='images/84x84.jpg';" alt="明天不见的直播" title="明天不见的直播"> -->

                        </div>

                                                <div class="text">

                            <h3 class="star-name">明天不见</h3>

                            <div class="star-info" title="炉石黄金超级联赛秋季赛季军，武汉黄金公开赛冠军。">

                                炉石黄金超级联赛秋季赛季军，武汉黄金公开赛冠军。                            </div>

                        </div>

                    </a>

                </li>

                            <li class="star-item">

                    <a  class="star-link clickstat" href="http://www.huya.com/xuanlv" target="_blank" eid="click/home/dashen/dashen29" eid_desc="点击/首页/大神/大神29" >

                        <div class="pic">

                            <!-- <img data-original="//livewebbs2.msstatic.com/huya_famous_b_158764213_b1464780695.jpg" src="images/84x84.jpg" onerror="this.onerror=null; alert(1); this.src='images/84x84.jpg';" alt="旋律的直播" title="旋律的直播"> -->

                        </div>

                                                <div class="text">

                            <h3 class="star-name">旋律</h3>

                            <div class="star-info" title="青铜五杰之一，JQK战队，连续两届YSL冠军。">

                                青铜五杰之一，JQK战队，连续两届YSL冠军。                            </div>

                        </div>

                    </a>

                </li>

                            <li class="star-item">

                    <a  class="star-link clickstat" href="http://www.huya.com/xiongrui" target="_blank" eid="click/home/dashen/dashen30" eid_desc="点击/首页/大神/大神30" >

                        <div class="pic">

                            <!-- <img data-original="//livewebbs2.msstatic.com/huya_famous_b_339085_b1464780501.jpg" src="images/84x84.jpg" onerror="this.onerror=null; alert(1); this.src='images/84x84.jpg';" alt="小熊的直播" title="小熊的直播"> -->

                        </div>

                                                <div class="text">

                            <h3 class="star-name">小熊</h3>

                            <div class="star-info" title="《问道》知名道行第一人，问道第六届名人争霸赛冠军。">

                                《问道》知名道行第一人，问道第六届名人争霸赛冠军。                            </div>

                        </div>

                    </a>

                </li>

                            <li class="star-item">

                    <a  class="star-link clickstat" href="http://www.huya.com/laosijikuangrrr" target="_blank" eid="click/home/dashen/dashen31" eid_desc="点击/首页/大神/大神31" >

                        <div class="pic">

                            <!-- <img data-original="//livewebbs2.msstatic.com/huya_famous_b_30568775_b1477022428.jpg" src="images/84x84.jpg" onerror="this.onerror=null; alert(1); this.src='images/84x84.jpg';" alt="狂人的直播" title="狂人的直播"> -->

                        </div>

                                                <div class="text">

                            <h3 class="star-name">狂人</h3>

                            <div class="star-info" title="王者荣耀官方解说，专业老司机，职业花式翻车。">

                                王者荣耀官方解说，专业老司机，职业花式翻车。                            </div>

                        </div>

                    </a>

                </li>

                            <li class="star-item">

                    <a  class="star-link clickstat" href="http://www.huya.com/ximen" target="_blank" eid="click/home/dashen/dashen32" eid_desc="点击/首页/大神/大神32" >

                        <div class="pic">

                            <!-- <img data-original="//livewebbs2.msstatic.com/huya_famous_b_398815955_b1464780462.jpg" src="images/84x84.jpg" onerror="this.onerror=null; alert(1); this.src='images/84x84.jpg';" alt="西门的直播" title="西门的直播"> -->

                        </div>

                                                <div class="text">

                            <h3 class="star-name">西门</h3>

                            <div class="star-info" title="电竞孔子，西门剑姬，门生遍天下。">

                                电竞孔子，西门剑姬，门生遍天下。                            </div>

                        </div>

                    </a>

                </li>

                            <li class="star-item">

                    <a  class="star-link clickstat" href="http://www.huya.com/tonghua" target="_blank" eid="click/home/dashen/dashen33" eid_desc="点击/首页/大神/大神33" >

                        <div class="pic">

                            <!-- <img data-original="//livewebbs2.msstatic.com/huya_famous_b_305131670_b1464780424.jpg" src="images/84x84.jpg" onerror="this.onerror=null; alert(1); this.src='images/84x84.jpg';" alt="童话的直播" title="童话的直播"> -->

                        </div>

                                                <div class="text">

                            <h3 class="star-name">童话</h3>

                            <div class="star-info" title="国服第一女ADC，为数不多的女王者">

                                国服第一女ADC，为数不多的女王者                            </div>

                        </div>

                    </a>

                </li>

                            <li class="star-item">

                    <a  class="star-link clickstat" href="http://www.huya.com/xiaoshihou" target="_blank" eid="click/home/dashen/dashen34" eid_desc="点击/首页/大神/大神34" >

                        <div class="pic">

                            <!-- <img data-original="//livewebbs2.msstatic.com/huya_famous_b_3199219_b1480048893.jpg" src="images/84x84.jpg" onerror="this.onerror=null; alert(1); this.src='images/84x84.jpg';" alt="晓时候的直播" title="晓时候的直播"> -->

                        </div>

                                                <div class="text">

                            <h3 class="star-name">晓时候</h3>

                            <div class="star-info" title="冲榜达人，球球最逗比主播，操作吹水两不误。">

                                冲榜达人，球球最逗比主播，操作吹水两不误。                            </div>

                        </div>

                    </a>

                </li>

                        </ul>

        </div>

    </div>

</div>

                <!-- E 明星大神模块 -->

          



            <!-- S 游戏列表 -->

            <div class="mod-index-list">

        <div class="live-box">

        <a target="_blank" id="J_adBnM" href="http://www.huya.com/s7" class="game-extend clickstat J_g_resource third-clickstat" data-thirdstat="" data-pos="index/banner/mid" data-rsc="2116" eid="click/push/banner/indexmid" eid_desc="点击/推荐/横幅/首页中部" data-thirdview="">

            <img id="J_bnM" src="{{URL::asset('images/huya_1506074437_content.jpg')}}" alt="">

        </a>

    </div>

    <!--遍历渲染页面二级分类-->
     <div class="live-box">
        <div class="box-hd">

            <h2 class="title">

                        <img src="{{URL::asset('images/game_14919794008412_logo.png')}}" alt="图标" class="hy-column-normal">

                        <a target="_blank" href="http://www.huya.com/g/wzry">王者荣耀</a>

                    </h2>

                        <ul class="more-list">

                            <li>
                                <a target="_blank" class=" grey" href="http://www.huya.com/guying">孤影</a>

                            </li>                   
                        </ul>

            <ul class="more-info">

                <li><span>1806</span>个主播正在直播</li>

                <li><a target="_blank" href="http://www.huya.com/g/wzry">更多<i class="index-more-icon"></i></a></li>

            </ul>

        </div>

        <div class="box-bd">

        <ul class="index-list clearfix  ">

            <li class="game-live-item" gid="2336">

                <a href="http://www.huya.com/1778020527" class="video-info new-clickstat" target="_blank" report='{"eid":"click/position","position":"index/column/2336/2","game_id":"2336","ayyuid":"1574641569"}'>

                <img class="pic" data-original="//screenshot.msstatic.com/yysnapshot/170922e5c61345615a37894cf11eea84a66ee0539c77?imageview/4/0/w/338/h/190/blur/1" src="{{URL::asset('images/338x190.jpg')}}" onerror="this.onerror=null; this.src='images/338x190.jpg';" alt="东辰_曹操大表哥的直播" title="东辰_曹操大表哥的直播">

                <em class="tag tag-recommend">大神推荐</em>        <div class="item-mask"></div>

                <i class="btn-link__hover_i"></i>

                <em class="tag tag-blue">蓝光</em>    </a>

            <a href="http://www.huya.com/1778020527" class="title new-clickstat"report='{"eid":"click/position","position":"index/column/2336/2","game_id":"2336","ayyuid":"1574641569"}' title="攻速流专场~飞的感觉" target="_blank">攻速流专场~飞的感觉</a>

            <span class="txt">

                <span class="avatar fl">

                    <img data-original="//huyaimg.msstatic.com/avatar/1062/c6/ce1529a30623d5bc8d43fd4733b44e_180_135.jpg" src="images/84x84.jpg" onerror="this.onerror=null; this.src='images/84x84.jpg';" alt="东辰_曹操大表哥" title="东辰_曹操大表哥">

                    <i class="nick" title="东辰_曹操大表哥">东辰_曹操大表哥</i>

                </span>

                        <span class="num"><i class="num-icon"></i><i class="js-num">25.7万</i></span>

            </span>

            </li>
        </ul>

        </div>

    </div>

               

    <!--end-->




       

    </div>



    <script src="{{URL::asset('js/headerFunction_c0fe602.js')}}" data-fixed="true"></script>

    <script src="{{URL::asset('js/jquery.lazyload_769f44a.js')}}" data-fixed="true"></script>

    <script type="text/javascript" charset="utf-8" src="{{URL::asset('js/auto_combine_d17e3_b03328c.js')}}"></script>
<script type="text/javascript" >

//require.resourceMap({"res":{"h5player":{"url":"//a.msstatic.com/huya/main/modules/h5player/h5player_1a89b41.js"},"dialog":{"url":"//a.msstatic.com/huya/main/modules/dialog/dialog_0b9b88a.js"}},"pkg":{}});

</script>


    <script>

        require("app/index");

    </script>
    <script data-fixed="true">
    </script>

    <script type='text/javascript' src="{{URL::asset('js/push-min.js?t=20170818')}}"></script>

    <script type='text/javascript' src="js/push.func-min.js?t=20161207')}}"></script><!-- E 后台推送消息 -->    <!-- E 页面公用功能 -->

    <script data-fixed="true">

        

       

    </script>

    @endsection

