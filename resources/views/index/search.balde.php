<!DOCTYPE html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><meta id="ctl00_metaKeywords" content="小说,小说网,言情小说,青春小说,玄幻小说,武侠小说,都市小说,历史小说,网络小说,原创网络文学" name="keywords" ><meta id="ctl00_metaDescription" content="小说阅读,精彩小说尽在腾讯文学。云起小说提供玄幻小说,武侠小说,原创小说,网游小说,都市小说,言情小说,青春小说,历史小说,军事小说,网游小说,科幻小说,恐怖小说,首发小说最新章节免费小说阅读,精彩尽在云起小说！ver:022122热门小说:莽荒纪,绝世唐门,天骄无双,胜者为王,醉枕江山。" name="description"><title>腾讯文学|免费小说,玄幻小说,武侠小说,青春小说,小说网各类小说下载</title><link rel="stylesheet" type="text/css" href="static/css/base.css" /><link rel="stylesheet" type="text/css" href="static/css/search.css" /><script type="text/javascript" src="static/js/base.js"></script><script type="text/javascript" src="static/js/search.js"></script><script type="text/javascript">        var webSite = "book";
        var getLoginStatusAjaxUrl = "http://book.qq.com/ywlogin/getStatus.html",
                sendYWLoginStatusAjaxUrl = "http://book.qq.com/ywlogin/logined.html",
                logoutYWSsoAjaxUrl = "http://book.qq.com/public/logout.html",
                checkTokenAjaxUrl = "/api/checkTokenYw.html";

        $(function(){
            //未登录时，更新登录状态
            CS.ssoLogin.init(getLoginStatusAjaxUrl, sendYWLoginStatusAjaxUrl,logoutYWSsoAjaxUrl, checkTokenAjaxUrl, webSite);
            CS.ssoLogin.getLoginStatus();
        });

    </script></head><body><!-- 顶部导航 --><div id="topNav" class="topNav"></div><!-- 顶部导航的模板 --><textarea id="topNavBarTpl" style="display:none;"><div class="pageCenter"><!--顶部左边区块--><div id="topLeft" class="topLeft cf"><ul><li class="navNormal authority"><span><a class="topLink" href="http://book.qq.com" target="_blank">QQ阅读</a><b></b></span><div class="topSubList client"><a class="cs_ico" href="http://chuangshi.qq.com" target="_blank">创世中文</a><a class="yq_ico" href="http://yunqi.qq.com" target="_blank">云起书院</a><a class="ds_ico" href="http://dushu.qq.com" target="_blank">QQ阅读</a><a class="bookIntnet" href="http://www.qq.com" target="_blank" onclick="pgvSendClick({hottag:'ISD.SHOW.INDEX.LINK03'});">腾讯网</a></div></li><li class="navNormal authority"><span><a class="topLink" href="https://yuedu.reader.qq.com/common/common/down/dist/index.html?actid=11822" target="_blank">客户端下载</a><b></b></span><!-- <div class="topSubList client"><a class="bookIntnet" href="https://yuedu.reader.qq.com/common/common/down/dist/index.html?actid=11822" target="_blank">客户端下载</a><a class="bookIos" href="http://book.qq.com/act/reader/index.html" target="_blank">苹果端</a></div> --></li></ul></div><!--登录前后容器--><div class="loginBox"><%if isLogin%><div class="login_after"><span class="navline">|</span><a class="exit" attr="click:ywlogout;" href="javascript:;">退出</a><a class="userName" href="http://account.book.qq.com/usercenter/index.html">欢迎您，<%=userInfo.Nickname ? userInfo.Nickname : ''%></a></div><%else%><div class="login_before"><span class="navline">|</span><!-- <a class="reg" target="_blank" href="http://zc.qq.com/chs/index.html?from=pt">注册</a> --><a class="login" attr="click:openLoginPopup;" href="javascript:;">登录/注册</a></div><%/if%></div><!--顶部右边区块--><div class="topRight"><%if isLogin%><a class="myreader" href="http://account.book.qq.com/userfavorite/index.html">我的书架<b></b></a><%else%><a class="myreader" href="javascript:;">最近阅读<b></b></a><%/if%><a class="user_center" href="http://account.book.qq.com">个人中心<b></b></a><a class="author_Zone" href="https://write.qq.com/?siteid=3">作家专区</a><span class="navline">|</span><a class="pay" href="http://account.book.qq.com/public/recharge.html" target="_blank">充值</a><!-- 我的书架的下拉列表 --><div class="bookrack"><%if isLogin%><p><span class="ccc">书架藏书：<%=userInfo.collectBookNum ? userInfo.collectBookNum : 0%>本</span></p><div class="nav_hover_list cf"><a href="http://account.book.qq.com/userfavorite/index.html?bookshelf_show=2">最近阅读</a><%if userInfo.bookshelfList && userInfo.bookshelfList.length%><%each userInfo.bookshelfList as bookshelf i%><a class="a_nobg" href="http://account.book.qq.com/userfavorite/index.html?Favoriteid=<%=bookshelf.groupId%>"><%=bookshelf.groupName%></a><%/each%><%/if%></div><%else%><!-- 最近阅读列表 --><div class="nav_hover_list cf"><%if userInfo.recentReadList && userInfo.recentReadList.length%><%each userInfo.recentReadList as book i%><a class="a_nobg" href="<%=book.bookUrl%>"><%=book.bookName%></a><%/each%><%/if%></div><%if !userInfo.recentReadList || userInfo.recentReadList.length === 0%><p>最近没有阅读书</p><%/if%><%/if%></div><!-- 个人中心的下拉列表 --><div class="user_menu"><div class="nav_hover_list cf"><a href="http://account.book.qq.com/userfavorite/index.html">我的书架</a><a href="http://account.book.qq.com/usercenter/index.html">账户设置</a><a class="a_nobg" href="http://account.book.qq.com/usermoney/index.html">账务中心 </a><a class="a_nobg" href="https://write.qq.com/?siteid=3">作家专区</a></div></div><!--新短消息提示--><%if isLogin%><div id="topnav_msg" style="display:none;"><div id="pointy_msg"></div><p><a class="red2" href="http://account.book.qq.com/usermessage/index.html">有新短消息</a></p><a id="close_msg" href="javascript:" title="关闭">关闭</a></div><%/if%></div></div></textarea><script type="text/javascript">    var getUserInfoAjaxUrl = "/public/showhead.html", //获取用户信息
        getUserNewMsgUrl = "http://account.book.qq.com/usermessage/getMessageNew.html",
        webSite = "book";
    
    var addToBookshelfAjaxUrl = "/public/addToBookshelf.html";

    $(function(){
        //书架
        CS.bookshelf.init(addToBookshelfAjaxUrl);
        //顶部导航条
        CS.topNav.init(getUserInfoAjaxUrl, getUserNewMsgUrl);
    });
</script><div class="pageCenter"><div class="bookheader cf"><div class="logo fl"><a href="http://book.qq.com"><img alt="腾讯文学，文字之美，感动心灵！" src="static/picture/txwxlogo.jpg"></a></div><div class="titleSearch fl cf"><div class="searchClass" id="searchClass"><em type="all"  id="currentSiteBtn">全部</em><div id="searchSiteList" class="searchClass_SubBox" style="display:none;"><a href="javascript:" type="all">全部</a><a href="javascript:" type="chuangshi">创世</a><a href="javascript:" type="yunqi">云起</a><a href="javascript:" type="dushu">图书</a></div></div><span></span><input id="searchInputBySite" type="text" class="clearInput" style="color: rgb(153, 153, 153);"  def="大国重工" value="大国重工"/><input id="searchBySiteBtn" type="button" class="searchBtn"><div class="hotWords">热词： <a href="http://yunqi.qq.com/bk/gdyq/26835006.html" target="_blank">只想继承你的家产</a><a href="http://yunqi.qq.com/bk/gdyq/26550647.html" target="_blank">画春光</a><a href="http://yunqi.qq.com/bk/gdyq/24230535.html" target="_blank">农家小福女</a><a href="http://chuangshi.qq.com/bk/ds/13665778.html" target="_blank">三界红包群</a><a href="http://chuangshi.qq.com/bk/xx/20468795.html" target="_blank">飞剑问道</a><a href="http://chuangshi.qq.com/bk/xh/614782.html" target="_blank">全职法师</a></div></div><div id="headQrCode" class="headQrCode fr"><p>下载QQ阅读</p><img width="80" height="80" src="static/picture/code03.png"><a href="javascript:" class="close"></a></div></div><script type="text/javascript" src="static/js/subnav.js"></script><script type="text/javascript">    var searchResultUrl = "/search/index/type/p1/wd/p2.html";

    $(function () {
        CS.page.subNav.init(searchResultUrl);
    });
</script></div><br><div class="layout"><div class="layout_left"><div class="noBookBox"><h3>没有找到符合条件的小说，请尝试搜索其它关键字。</h3><div class="noBookRec"><p>您还可以：</p><ul><li>试试看 <a href="http://zhannei.baidu.com/cse/search?s=7454147665526879161&q=%E5%A4%A7%E5%9B%BD%E9%87%8D%E5%B7%A5" target="_blank">扩大搜索范围</a>，或许会有惊喜</li></ul></div></div></div></div><style>   .footer_main{
     height: 170px;
   }
   .footer_main li{
     height: 180px;
   }
 </style><div class="footer"><div class="footer_main cf"><ul><li style="height: 170px;"><span>友情链接</span></li><li style=""><a target="_blank" href="http://chuangshi.qq.com/">创世中文网</a><a target="_blank" href="http://yunqi.qq.com/">云起书院</a><a target="_blank" href="http://dushu.qq.com/">畅销图书</a><a target="_blank" href="http://www.qidian.com">起点中文网</a><a href="https://www.webnovel.com" target="_blank" >起点国际</a><a target="_blank" href="http://yuedu.163.com/yc/">网易原创</a><a target="_blank" href="http://faloo.com">飞卢小说网</a><a href="http://www.hongshu.com" target="_blank" >红薯小说网</a></li><li><a target="_blank" href="http://www.17read.com">一起读小说网</a><a target="_blank" href="https://book.km.com/">快猫小说</a><a target="_blank" href="http://xiaoshuo.sogou.com">搜狗小说</a><a target="_blank" href="http://www.3gsc.com.cn/">3G小说网</a><a target="_blank" href="http://xiaoshuo.360.cn">360小说</a><a target="_blank" href="http://www.17k.com">17K小说网</a><a target="_blank" href="http://mm.17k.com">言情小说</a></li><li><a target="_blank" href="http://www.tadu.com">塔读文学</a><a target="_blank" href="http://www.rain8.com">雨枫轩</a><a target="_blank" href="http://www.zongheng.com">纵横小说网</a><a target="_blank" href="http://www.heiyan.com">黑岩阅读网</a><a target="_blank" href="http://www.zongheng.com/mianfei">免费小说</a><a target="_blank" href="http://xiaoshuo.duba.com/?f=qd">金山小说</a><a target="_blank" href="http://www.lkong.net/forum.php">龙的天空</a></li><li><a target="_blank" href="http://www.huanwen.com">幻文小说网</a><a target="_blank" href="http://www.motie.com/">磨铁中文网</a><a target="_blank" href="http://www.ruochu.com/">若初文学网</a><a target="_blank" href="http://www.bayueju.com/">八月居小说网</a><a target="_blank" href="http://www.kanshu.com/">看书网小说</a><a target="_blank" href="http://www.zhaoxiaoshuo.com/">找小说</a><a target="_blank" href="http://www.qwsy.com/">蔷薇书院</a></li><li><a target="_blank" href="http://www.ting85.com/">畅听网</a><a target="_blank" href="http://www.shuhai.com/">书海小说网</a><a target="_blank" href="http://www.znds.com/">智能电视网</a><a target="_blank" href="http://www.banbijiang.com/">半壁江中文网</a><a href="http://www.zhulang.com/" target="_blank">逐浪小说网</a><a href="http://bbs.eben.cn/forum.php?mod=forumdisplay&fid=30" target="_blank">E人E本移动阅读</a><a target="_blank" href="http://www.feihuo.com/">飞火游戏</a></li><li class="business"><span>商务合作</span><div class="Bcontact"><p>外部渠道联系：</p><p>张小姐 <a href="mailto:zhanglin@yuewen.com">zhanglin@yuewen.com</a></p><p>腾讯内部联系：</p><p>卢小姐 <a href="mailto:luxiaoyun@yuewen.com">luxiaoyun@yuewen.com</a></p></div></li></ul></div><div class="foot"><p><a href="http://www.tencent.com/" target="_blank" rel="nofollow">关于腾讯</a><a href="http://www.tencent.com/index_e.shtml" target="_blank" rel="nofollow">About Tencent</a><a href="http://www.qq.com/contract.shtml" target="_blank" rel="nofollow">服务协议</a><a href="http://open.qq.com/" target="_blank" rel="nofollow">开放平台</a><a href="http://www.tencentmind.com/" target="_blank" rel="nofollow">广告服务</a><a href="http://hr.tencent.com/" target="_blank" rel="nofollow">腾讯招聘</a><a href="http://gongyi.qq.com/" target="_blank" rel="nofollow">腾讯公益</a><a href="https://www.yuewen.com/service.html" target="_blank" rel="nofollow">客服中心</a><a  href="http://www.qq.com/map/" target="_blank" rel="nofollow">网站导航</a><a class="nobroder" target="_blank" href="https://jubao.yuewen.com/">违规举报</a></p><p> Copyright&nbsp;&nbsp;©&nbsp;1998&nbsp;-&nbsp;2020&nbsp;Tencent.&nbsp;All&nbsp;Rights&nbsp;Reserved</p><p>腾讯公司&nbsp;版权所有</p><p>粤府新函[2001]87号 粤网文[2011]0483-070号 网络视听许可证1904073号 网站备案/许可证号：<a style="border-right: 0 solid #CCC;" href="http://beian.miit.gov.cn/publish/query/indexFirst.action" rel="noreferrer" target="_blank">粤B2-20090059 B2-20090028</a></p></div><div id="icp"><a href="http://www.cyberpolice.cn/wfjb/" target="_blank" rel="external nofollow"><img src="static/picture/footer_img1.png" width="122" height="52"></a><a href="http://www.cyberpolice.cn/wfjb/" target="_blank" rel="external nofollow"><img src="static/picture/footer_img2.png"></a><a href="http://beian.miit.gov.cn/state/outPortal/loginPortal.action" target="_blank" rel="external nofollow"><img src="static/picture/footer_img3.png"></a><a href="http://www.12377.cn/" target="_blank" rel="external nofollow"><img src="static/picture/footer_img4.png"></a><a href="http://www.wenming.cn/" target="_blank" rel="external nofollow"><img src="static/picture/footer_img5.png"></a><a href="http://www.shjbzx.cn/" target="_blank" rel="external nofollow"><img src="static/picture/footer_img6.png" ></a></div></div><!-- 数据统计 --><script type="text/javascript">	var requestStatLogUrl = "http://account.book.qq.com/statlog/index.html",
		requestStatLogData = {
			'site' : "bk",
			'url' : "ACtVJQJkBjZQdwNjBW1UdFJuADtWNFQ2UncHLFVxXnVRJVUzBSlXZwYoo00oUD9VelIqUmMIclOwVvUHoo00oQLjBM9SvQDtVdECjAayULIDpQUrVDNScwA4Vjw",
			'bid' : '',
			'uuid' : '',
			'encrypt' : 1
		};

	// var refreshKeyUrl = "http://book.qq.com/ywlogin/refreshkey.html";

	$(function(){
		function _requestStatLog(){
			var params = [],
				url = '';

			$.each(requestStatLogData, function(name, val){
				params.push(name +'='+ encodeURIComponent(val));
			});
			url = requestStatLogUrl +'?'+ params.join('&');

			if(document.referrer){
	            url += '&ref='+ encodeURIComponent(document.referrer);
	        }
			
			new Image().src = url;
		}
		_requestStatLog();

		// function _refreshKey(){
		// 	new Image().src = refreshKeyUrl;
		// }
		// setInterval(_refreshKey, 1800000); //每30分钟刷新一次key

		//public
		$.getScript("http://tajs.qq.com/stats?sId=34321758");
		//book.qq.com
		$.getScript("http://tajs.qq.com/stats?sId=34321514", function() {
			//点击流
			$.getScript("http://pingjs.qq.com/ping_tcss_ied.js", function() {
				if (typeof(pgvMain) === 'function') {
					pgvMain();
				}
			});
		});
	});
</script><a id="totop" class="go_top" href="javascript:;" style="display:none;"></a><script type="text/javascript" src="static/js/searchresult.js"></script><script type="text/javascript">    $(function(){
        CS.page.search.result.init();
    });
</script></body></html>