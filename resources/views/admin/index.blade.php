@extends('admin.layouts.admin')

@section('title', 'Page Title')

@section('sidebar')
    @parent
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12 top_tiles">
            {{-- 文章 --}}
            <a href="/articles" class="statistics-panel">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 statistics-article" data-key="articleCount">
                    <div class="tile-stats statistics-box">
                        <div class="icon"><i class="fa fa-envira"></i></div>
                        <div class="count"></div>
                        <h4>文章</h4>
                    </div>
                </div>
            </a>
            {{-- 标签 --}}
            <a href="/article/tags" class="statistics-panel">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 statistics-tag" data-key="tagCount">
                    <div class="tile-stats statistics-box">
                        <div class="icon"><i class="fa fa-tags"></i></div>
                        <div class="count"></div>
                        <h4>标签</h4>
                    </div>
                </div>
            </a>
            {{-- 分类 --}}
            <a href="/article/types" class="statistics-panel">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 statistics-type" data-key="typeCount">
                    <div class="tile-stats statistics-box">
                        <div class="icon"><i class="fa fa-th"></i></div>
                        <div class="count"></div>
                        <h4>分类</h4>
                    </div>
                </div>
            </a>
            {{-- 评论 --}}
            <a href="/comments" class="statistics-panel">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 statistics-comment" data-key="commentCount">
                    <div class="tile-stats statistics-box">
                        <div class="icon"><i class="fa fa-comments-o"></i></div>
                        <div class="count"></div>
                        <h4>留言数</h4>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="row">
        {{-- 分类文章数统计 --}}
        <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="x_panel fixed_height_320 statistics-box">
                <div class="x_title">
                    <h2>分类文章数统计</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div id="echart_type" style="height: 250px;"></div>
                </div>
            </div>
        </div>
        {{-- 文章访问TOP.10 --}}
        <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="x_panel fixed_height_320 statistics-box">
                <div class="x_title">
                    <h2>文章访问TOP.10</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content" id="statistics-article-list">
                    <ul class="list-unstyled">
{{--                        <@articleTag method="hotList" pageSize="10">--}}
{{--                        <#if hotList?? && (hotList?size > 0)>--}}
{{--                        <#list hotList as item>--}}
{{--                        <li class="title word-prase"><a href="${config.siteUrl}/article/${item.id?c}"--}}
{{--                                                        title="${item.title}">${item.title}</a></li>--}}
{{--                        <li class="count"><span title="浏览人次：${item.lookCount?c}">${item.lookCount?c}</span></li>--}}
{{--                    </#list>--}}
{{--                </#if>--}}
{{--            </@articleTag>--}}
            </ul>
        </div>
    </div>
    </div>
    {{-- 爬虫访问统计TOP.10 --}}
    <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="x_panel fixed_height_320 statistics-box">
            <div class="x_title">
                <h2>爬虫访问统计TOP.10</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div id="echart_spider" style="height: 250px;"></div>
            </div>
        </div>
    </div>

    {{-- 近期文章 --}}
    <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="x_panel statistics-box">
            <div class="x_title">
                <h2>近期文章 <small> </small></h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a href="/articles" target="_blank" title="查看更多"><i class="fa fa-ellipsis-h"></i></a></li>
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <table class="table table-bordered recentArticles">
                    <thead>
                    <tr>
                        <th class="title">
                            <div class="word-prase">标题</div>
                        </th>
                        <th>分类</th>
                        <th>浏览数</th>
                        <th>发布时间</th>
                    </tr>
                    </thead>
                    <tbody>
{{--                    <@articleTag method="recentArticles" pageSize="5">--}}
{{--                    <#if recentArticles?? && (recentArticles?size > 0)>--}}
{{--                    <#list recentArticles as item>--}}
{{--                    <tr>--}}
{{--                        <th class="title">--}}
{{--                            <div class="word-prase"><a href="${config.siteUrl}/article/${item.id?c}"--}}
{{--                                                       title="${item.title}">${item.title}</a></div>--}}
{{--                        </th>--}}
{{--                        <td><a href="${config.siteUrl}/type/${item.type.id?c}"--}}
{{--                               target="_blank">${item.type.name}</a></td>--}}
{{--                        <td>${item.lookCount?c}</td>--}}
{{--                        <td>${item.createTime?string('yyyy-MM-dd')}</td>--}}
{{--                    </tr>--}}
{{--                    </#list>--}}
{{--                </#if>--}}
{{--            </@articleTag>--}}
            </tbody>
            </table>
        </div>
    </div>
    </div>
    {{-- 近期评论 --}}
    <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="x_panel statistics-box">
            <div class="x_title">
                <h2>近期评论 <small> </small></h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a href="/comments" target="_blank" title="查看更多"><i class="fa fa-ellipsis-h"></i></a></li>
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <table class="table table-bordered recentComments">
                    <thead>
                    <tr>
                        <th>
                            <div>发起人</div>
                        </th>
                        <th class="content">
                            <div class="word-prase">评论内容</div>
                        </th>
                        <th class="source">
                            <div class="word-prase">出处</div>
                        </th>
                        <th>评论时间</th>
                    </tr>
                    </thead>
                    <tbody>
{{--                    <@zhydTag method="recentComments" pageSize="5">--}}
{{--                    <#if recentComments?? && (recentComments?size > 0)>--}}
{{--                    <#list recentComments as item>--}}
{{--                    <tr>--}}
{{--                        <th class="title word-prase">--}}
{{--                            <div><a href="${item.url}" target="_blank"--}}
{{--                                    rel="external nofollow">${item.nickname!}</a></div>--}}
{{--                        </th>--}}
{{--                        <td class="content">--}}
{{--                            <div class="word-prase">${item.briefContent!}</div>--}}
{{--                        </td>--}}
{{--                        <td class="source">--}}
{{--                            <div class="word-prase"><a--}}
{{--                                        href="${config.siteUrl}${item.sourceUrl}#comment-${item.id?c}"--}}
{{--                                        target="_blank" rel="external nofollow">${item.articleTitle!}</a>--}}
{{--                            </div>--}}
{{--                        </td>--}}
{{--                        <td>${item.createTime?string('yyyy-MM-dd')}</td>--}}
{{--                    </tr>--}}
{{--                    </#list>--}}
{{--                </#if>--}}
{{--            </@zhydTag>--}}
            </tbody>
            </table>
        </div>
    </div>
    </div>
    </div>
@endsection

@section('footer')
    @parent
    <script src="https://cdn.jsdelivr.net/npm/echarts@4.1.0/dist/echarts.min.js"></script>
    <script src="/js/echarts.js"></script>
    <script>
        /* 顶部卡片统计 */
        $.post("/statistics/siteInfo", function (json) {
            $.alert.ajaxSuccess(json);
            if (json.status == 200) {
                var jsonData = json.data;

                function setValue(dom, value) {
                    var $dom = dom;
                    $dom.find("div.tile-stats .count").text(value);
                }

                $(".statistics-tag, .statistics-type, .statistics-comment, .statistics-article").each(function () {
                    var $this = $(this);
                    var jsonKey = $this.data("key");
                    setValue($this, jsonData[jsonKey]);
                });
            }
        });
        /* 分类文章数统计 */
        $.post("/statistics/listType", function (json) {
            $.alert.ajaxSuccess(json);
            if (json.status == 200) {
                var jsonData = json.data;
                zhyd.createChart({
                    id: 'echart_type',
                    legendData: getNames(jsonData, 'name'),
                    series: {name: '分类文章数统计', type: 'pie', seriesData: jsonData}
                });
            }
        });

        /* 爬虫访问统计 */
        $.post("/statistics/listSpider", function (json) {
            $.alert.ajaxSuccess(json);
            if (json.status == 200) {
                var jsonData = json.data || [{name: '暂无', value: 0}];
                zhyd.createChart({
                    id: 'echart_spider',
                    legendData: getNames(jsonData, 'name'),
                    series: {name: '爬虫访问统计', type: 'pie', seriesData: jsonData}
                });
            }
        });

        function getNames(arr, key) {
            if (!arr) {
                return [];
            }
            var resultArr = [];
            $.each(arr, function (i, v) {
                resultArr.push(v[key]);
            });
            return resultArr;
        }

        init_echarts();
        $("#noticeModal").modal('show');
    </script>
@endsection
