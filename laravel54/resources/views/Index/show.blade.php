  @extends('header')
@section('content')
               <!-- 标签快速选择 -->

                <div class="box-hd clearfix">

                    <h2 class="title"><a href="http://www.huya.com/l">全部直播</a></h2>

                    <div class="filter">

    <!-- <dl id="js-filter-list" class="clearfix">
    
        <dd class="clickstat active" data-id="0" data-type="tagAll" eid="click/list/all/all" eid_desc="点击/标签/全部直播/全部">全部</dd>
    
                <dd class="clickstat" data-id="51" data-type="tmpId" eid="click/list/all/51" eid_desc="点击/标签/全部直播/大神推荐">
    
            大神推荐        </dd>
    
                        <dd class="clickstat" data-id="58" data-type="tmpId" eid="click/list/all/58" eid_desc="点击/标签/全部直播/视频美女">
    
            视频美女        </dd>
    
                                <dd class="clickstat" data-id="3000" data-type="recTag" eid="click/list/all/blueray" eid_desc="点击/标签/全部直播/蓝光">蓝光</dd>
    
            </dl> -->

</div>

                </div>

                <div class="box-bd">

                    <ul class="live-list clearfix areafib" id="js-live-list">

                                                                                                        <li class="game-live-item" gid="1">

 <a href="http://www.huya.com/s7" class="video-info new-clickstat" target="_blank" report='{"eid":"click/position","position":"allLive/0/1/1","game_id":"1","ayyuid":"1346609715"}'>

        <img class="pic" data-original="//screenshot.msstatic.com/yysnapshot/1709ecf69d1b2e597ee9e5e4872fc0223a0104d96715?imageview/4/0/w/338/h/190/blur/1" src="{{URL::asset('images/338x190.jpg')}}" onerror="this.onerror=null; this.src='images/338x190.jpg';" alt="S7英雄联盟全球总决赛的直播" title="S7英雄联盟全球总决赛的直播">

                <div class="item-mask"></div>

        <i class="btn-link__hover_i"></i>

        <em class="tag tag-blue">蓝光</em>    </a>

    <a href="http://www.huya.com/s7" class="title new-clickstat"report='{"eid":"click/position","position":"allLive/0/1/1","game_id":"1","ayyuid":"1346609715"}' title="S7全球总决赛" target="_blank">S7全球总决赛</a>

    <span class="txt">

        <span class="avatar fl">

            <img data-original="//huyaimg.msstatic.com/avatar/1042/6f/3626ef611e990cbbcefab8e1bbc561_180_135.jpg" src="{{URL::asset('images/84x84.jpg')}}" onerror="this.onerror=null; this.src='images/84x84.jpg';" alt="S7英雄联盟全球总决赛" title="S7英雄联盟全球总决赛">

            <i class="nick" title="S7英雄联盟全球总决赛">S7英雄联盟全球总决赛</i>

        </span>

                <span class="game-type fr"><a target="_blank" href="http://www.huya.com/g/lol" title="英雄联盟">英雄联盟</a></span>

                <span class="num"><i class="num-icon"></i><i class="js-num">80.8万</i></span>

    </span>

</li>

<li class="game-live-item" gid="1663">

        <a href="http://www.huya.com/xcdxar" class="video-info new-clickstat" target="_blank" report='{"eid":"click/position","position":"allLive/0/1/8","game_id":"1663","ayyuid":"1482281587"}'>

        <img class="pic" data-original="//huyaimg.msstatic.com/cdnimage/anchorpost/1093/0a/a98a1f6878b930763a35981e965ce1_1663.jpg?imageview/4/0/w/338/h/190/blur/1" src="images/338x190.jpg" onerror="this.onerror=null; this.src='images/338x190.jpg';" alt="爱拍-安柔的直播" title="爱拍-安柔的直播">

        <em class="tag tag-recommend">白金推荐</em>        <div class="item-mask"></div>

        <i class="btn-link__hover_i"></i>

            </a>

    <a href="http://www.huya.com/xcdxar" class="title new-clickstat"report='{"eid":"click/position","position":"allLive/0/1/8","game_id":"1663","ayyuid":"1482281587"}' title="不期而遇相伴相惜" target="_blank">不期而遇相伴相惜</a>

    <span class="txt">

        <span class="avatar fl">

            <img data-original="//huyaimg.msstatic.com/avatar/1093/0a/a98a1f6878b930763a35981e965ce1_180_135.jpg" src="images/84x84.jpg" onerror="this.onerror=null; this.src='images/84x84.jpg';" alt="爱拍-安柔" title="爱拍-安柔">

            <i class="nick" title="爱拍-安柔">爱拍-安柔</i>

        </span>

                <span class="game-type fr"><a target="_blank" href="http://www.huya.com/g/xingxiu" title="星秀">星秀</a></span>

                <span class="num"><i class="num-icon"></i><i class="js-num">3154</i></span>

    </span>

</li>
</ul>
@endsection
       