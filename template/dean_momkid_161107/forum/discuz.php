<?php echo '加田小店';exit;?>
<!--{template common/header}-->
        <!--[diy=diy_chart]--><div id="diy_chart" class="area"></div><!--[/diy]-->
        <div class="deanbbsads"><!--[diy=deanbbsads]--><div id="deanbbsads" class="area"></div><!--[/diy]--></div>
        <!--首页N格-->
        <div class="deannge deanactions fadeIn">
            
            <div class="deanltflash">
                <!--[diy=deanltflash]--><div id="deanltflash" class="area"></div><!--[/diy]-->
                <a class="prev" href="javascript:void(0)"></a>
                <a class="next" href="javascript:void(0)"></a>
            </div>
            <script type="text/javascript">
                jQuery(".deanltflash").slide({ mainCell:".deanpic",effect:"left", autoPlay:true, delayTime:300});
            </script>
            <div class="deanltranklist">
                <div class="deanltranklist_top">
                    <ul>
                        <li class="cur">最新帖子</li>
                        <li>热门帖子</li>
                        <li>推荐帖子</li>
                        <div class="clear"></div>
                    </ul>
                </div>
                <div class="deanbottom_box">
                    <dl>
                        <dd style="display:block;">
                            <div class="deannr_box">
                                <ul>
                                    <!--[diy=deannr_box]--><div id="deannr_box" class="area"></div><!--[/diy]-->
                                    
                                </ul>
                            </div>
                        </dd>
                        <dd>
                            <div class="deannr_box">
                                <ul>
                                    <!--[diy=deannr_box1]--><div id="deannr_box1" class="area"></div><!--[/diy]-->
                                </ul>
                            </div>
                        </dd>
                        <dd>
                            <div class="deannr_box">
                                <ul>
                                    <!--[diy=deannr_box2]--><div id="deannr_box2" class="area"></div><!--[/diy]-->
                                </ul>
                            </div>
                        </dd>
                    </dl>
                </div>
                <script type="text/javascript">
                jQuery(function(){
                    jQuery(".deanltranklist_top li").each(function(a){
                        jQuery(this).click(function(){
                            jQuery(this).addClass("cur").siblings().removeClass("cur");
                            jQuery(".deanbottom_box dd").eq(a).show().siblings().hide();
                            })
                        })
                    })
                </script>
            </div>
            <div class="clear"></div>
        </div>
        <!--光柱-->
        <div class="deangzhuyas">
        	<ul>
            	<!--[diy=deangzhuyas]--><div id="deangzhuyas" class="area"></div><!--[/diy]-->
            	
                <div class="clear"></div>
            </ul>
        </div>
        
    	<div id="pt" class="bm cl">
        	<div class="w1180">
                <!--{if empty($gid) && $announcements}-->
                <div class="y">
                    <div id="an">
                        <dl class="cl">
                            <dt class="z xw1">{lang announcements}:&nbsp;</dt>
                            <dd>
                                <div id="anc"><ul id="ancl">$announcements</ul></div>
                            </dd>
                        </dl>
                    </div>
                    <script type="text/javascript">announcement();</script>
                </div>
                <!--{/if}-->
                <div class="z">
                    <a href="./" class="nvhm" title="{lang homepage}">$_G[setting][bbname]</a><em>&raquo;</em><a href="forum.php">{$_G[setting][navs][2][navname]}</a>$navigation
                </div>
                <div class="z"><!--{hook/index_status_extra}--></div>
            </div>
        </div>


        <!--{if empty($gid)}-->
            <!--{ad/text/wp a_t}-->
        <!--{/if}-->
        
            <style id="diy_style" type="text/css"></style>
        
        <!--{if empty($gid)}-->
            <div class="wp">
                <!--[diy=diy1]--><div id="diy1" class="area"></div><!--[/diy]-->
            </div>
        <!--{/if}-->
        <div class="w1180">
        <div id="ct" class="wp cl{if $_G['setting']['forumallowside']} ct2{/if}">
            
            
           
        
        <!--{if empty($gid)}-->
        <div id="chart" class="bm bw0 cl deanactions fadeInUp">
        	
            <p class="chart z">
                <span class="deanjinri">{lang index_today}<br />$todayposts</span><span class="deanzuori">{lang index_yesterday}<br />$postdata[0]</span><span class="deantiezishu">{lang index_posts}<br />$posts</span><span class="deanshuzi">{lang index_members}<br />$_G['cache']['userstats']['totalmembers']</span></p>
            <div class="y">
                <!--{hook/index_nav_extra}-->
                <!--{if $_G['uid']}--><a href="forum.php?mod=guide&view=my" title="{lang my_posts}" class="xi2">{lang my_posts}</a><!--{/if}--><!--{if !empty($_G['setting']['search']['forum']['status'])}--><!--{if $_G['uid']}--><span class="pipe">|</span><!--{/if}--><a href="forum.php?mod=guide&view=new" title="{lang show_newthreads}" class="xi2">{lang show_newthreads}</a><!--{/if}-->
                <span class="pipe">|</span><!--{if $_G['cache']['userstats']['newsetuser']}-->{lang welcome_new_members}: <em><a href="home.php?mod=space&username={echo rawurlencode($_G['cache']['userstats']['newsetuser'])}" target="_blank" class="xi2">$_G['cache']['userstats']['newsetuser']</a></em><!--{/if}-->
            </div>
        </div>
        <!--{/if}-->
            
            
            <div class="mn">
                    <!--{hook/index_top}-->
            
                    <!--{if !empty($_G['cache']['heats']['message'])}-->
                        <div class="bm">
                            <div class="bm_h cl">
                                <h2>{lang hotthreads_forum}</h2>
                            </div>
                            <div class="bm_c cl">
                                <div class="heat z">
                                    <!--{loop $_G['cache']['heats']['message'] $data}-->
                                        <dl class="xld">
                                            <dt><!--{if $_G['adminid'] == 1}--><a class="d" href="forum.php?mod=misc&action=removeindexheats&tid=$data[tid]" onclick="return removeindexheats()">delete</a><!--{/if}-->
                                            <a href="forum.php?mod=viewthread&tid=$data[tid]" target="_blank" class="xi2">$data[subject]</a></dt>
                                            <dd>$data[message]</dd>
                                        </dl>
                                    <!--{/loop}-->
                                </div>
                                <ul class="xl xl1 heatl">
                                <!--{loop $_G['cache']['heats']['subject'] $data}-->
                                    <li><!--{if $_G['adminid'] == 1}--><a class="d" href="forum.php?mod=misc&action=removeindexheats&tid=$data[tid]" onclick="return removeindexheats()">delete</a><!--{/if}-->&middot; <a href="forum.php?mod=viewthread&tid=$data[tid]" target="_blank" class="xi2">$data[subject]</a></li>
                                <!--{/loop}-->
                                </ul>
                            </div>
                        </div>
                    <!--{/if}-->
            
                    <!--{hook/index_catlist_top}-->
                    <div class="fl bm">
                    <!--{if empty($gid) && !empty($forum_favlist)}-->
                        <!--{eval $forumscount = count($forum_favlist);}-->
                        <!--{eval $forumcolumns = $forumscount > 3 ? ($forumscount == 4 ? 4 : 5) : 1;}-->
            
                        <!--{eval $forumcolwidth = (floor(100 / $forumcolumns) - 0.1).'%';}-->
            
                        <div class="bm bmw {if $forumcolumns} flg{/if} cl">
                            <div class="bm_h cl">
                                <span class="o">
                                    <img id="category_0_img" src="{IMGDIR}/$collapse['collapseimg_0']" title="{lang spread}" alt="{lang spread}" onclick="toggle_collapse('category_0');" />
                                </span>
                                <h2><a href="home.php?mod=space&do=favorite&type=forum">{lang forum_myfav}</a></h2>
                            </div>
                            <div id="category_0" class="bm_c" style="{echo $collapse['category_0']}">
                                <table cellspacing="0" cellpadding="0" class="fl_tb">
                                    <tr>
                                    <!--{eval $favorderid = 0;}-->
                                    <!--{loop $forum_favlist $key $favorite}-->
                                    <!--{if $favforumlist[$favorite[id]]}-->
                                    <!--{eval $forum=$favforumlist[$favorite[id]];}-->
                                    <!--{eval $forumurl = !empty($forum['domain']) && !empty($_G['setting']['domain']['root']['forum']) ? 'http://'.$forum['domain'].'.'.$_G['setting']['domain']['root']['forum'] : 'forum.php?mod=forumdisplay&fid='.$forum['fid'];}-->
                                        <!--{if $forumcolumns>1}-->
                                            <!--{if $favorderid && ($favorderid % $forumcolumns == 0)}-->
                                                </tr>
                                                <!--{if $favorderid < $forumscount}-->
                                                    <tr class="fl_row">
                                                <!--{/if}-->
                                            <!--{/if}-->
                                            <td class="fl_g"{if $forumcolwidth} width="$forumcolwidth"{/if}>
                                                <div class="fl_icn_g deanactions swing"{if !empty($forum[extra][iconwidth]) && !empty($forum[icon])} style="width: {$forum[extra][iconwidth]}px;"{/if}>
                                                <!--{if $forum[icon]}-->
                                                    $forum[icon]
                                                <!--{else}-->
                                                    <a href="$forumurl"{if $forum[redirect]} target="_blank"{/if}><img src="{IMGDIR}/forum{if $forum[folder]}_new{/if}.gif" alt="$forum[name]" /></a>
                                                <!--{/if}-->
                                                </div>
                                                <dl{if !empty($forum[extra][iconwidth]) && !empty($forum[icon])} style="margin-left: {$forum[extra][iconwidth]}px;"{/if}>
                                                    <dt><a href="$forumurl"{if $forum[redirect]} target="_blank"{/if}{if $forum[extra][namecolor]} style="color: {$forum[extra][namecolor]};"{/if}>$forum[name]</a><!--{if $forum[todayposts] && !$forum['redirect']}--><em class="xw0 xi1" title="{lang forum_todayposts}"> ($forum[todayposts])</em><!--{/if}--></dt>
            
                                                    <!--{if empty($forum[redirect])}--><dd><em>{lang forum_threads}: <!--{echo dnumber($forum[threads])}--></em>, <em>{lang forum_posts}: <!--{echo dnumber($forum[posts])}--></em></dd><!--{/if}-->
                                                    <dd>
                                                    <!--{if $forum['permission'] == 1}-->
                                                        {lang private_forum}
                                                    <!--{else}-->
                                                        <!--{if $forum['redirect']}-->
                                                            <a href="$forumurl" class="xi2">{lang url_link}</a>
                                                        <!--{elseif is_array($forum['lastpost'])}-->
                                                            <!--{if $forumcolumns < 3}-->
                                                                <a href="forum.php?mod=redirect&tid=$forum[lastpost][tid]&goto=lastpost#lastpost" class="xi2"><!--{echo cutstr($forum[lastpost][subject], 30)}--></a> <cite>$forum[lastpost][dateline] <!--{if $forum['lastpost']['author']}-->$forum['lastpost']['author']<!--{else}-->$_G[setting][anonymoustext]<!--{/if}--></cite>
                                                            <!--{else}-->
                                                                <a href="forum.php?mod=redirect&tid=$forum[lastpost][tid]&goto=lastpost#lastpost">{lang forum_lastpost}: $forum[lastpost][dateline]</a>
                                                            <!--{/if}-->
                                                        <!--{else}-->
                                                            {lang never}
                                                        <!--{/if}-->
                                                    <!--{/if}-->
                                                    </dd>
                                                    <!--{hook/index_favforum_extra $forum[fid]}-->
                                                    <!--{hook/index_datacollection_extra $colletion[ctid]}-->
                                                </dl>
                                            </td>
                                            <!--{eval $favorderid++;}-->
                                        <!--{else}-->
                                            <td class="fl_icn" {if !empty($forum[extra][iconwidth]) && !empty($forum[icon])} style="width: {$forum[extra][iconwidth]}px;"{/if}>
                                                <!--{if $forum[icon]}-->
                                                    $forum[icon]
                                                <!--{else}-->
                                                    <a href="$forumurl"{if $forum[redirect]} target="_blank"{/if}><img src="{IMGDIR}/forum{if $forum[folder]}_new{/if}.gif" alt="$forum[name]" /></a>
                                                <!--{/if}-->
                                            </td>
                                            <td>
                                                <h2><a href="$forumurl"{if $forum[redirect]} target="_blank"{/if}{if $forum[extra][namecolor]} style="color: {$forum[extra][namecolor]};"{/if}>$forum[name]</a><!--{if $forum[todayposts] && !$forum['redirect']}--><em class="xw0 xi1" title="{lang forum_todayposts}"> ($forum[todayposts])</em><!--{/if}--></h2>
                                                <!--{if $forum[description]}--><p class="xg2">$forum[description]</p><!--{/if}-->
                                                <!--{if $forum['subforums']}--><p>{lang forum_subforums}: $forum['subforums']</p><!--{/if}-->
                                                <!--{if $forum['moderators']}--><p>{lang forum_moderators}: <span class="xi2">$forum[moderators]</span></p><!--{/if}-->
                                                <!--{hook/index_favforum_extra $forum[fid]}-->
                                            </td>
                                            <td class="fl_i">
                                                <!--{if empty($forum[redirect])}--><span class="xi2"><!--{echo dnumber($forum[threads])}--></span><span class="xg1"> / <!--{echo dnumber($forum[posts])}--></span><!--{/if}-->
                                            </td>
                                            <td class="fl_by">
                                                <div>
                                                <!--{if $forum['permission'] == 1}-->
                                                    {lang private_forum}
                                                <!--{else}-->
                                                    <!--{if $forum['redirect']}-->
                                                        <a href="$forumurl" class="xi2">{lang url_link}</a>
                                                    <!--{elseif is_array($forum['lastpost'])}-->
                                                        <a href="forum.php?mod=redirect&tid=$forum[lastpost][tid]&goto=lastpost#lastpost" class="xi2"><!--{echo cutstr($forum[lastpost][subject], 30)}--></a> <cite>$forum[lastpost][dateline] <!--{if $forum['lastpost']['author']}-->$forum['lastpost']['author']<!--{else}-->$_G[setting][anonymoustext]<!--{/if}--></cite>
                                                    <!--{else}-->
                                                        {lang never}
                                                    <!--{/if}-->
                                                <!--{/if}-->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="fl_row">
            
                                        <!--{/if}-->
                                    <!--{/if}-->
                                    <!--{/loop}-->
                                    <!--{if ($columnspad = $favorderid % $forumcolumns) > 0}--><!--{echo str_repeat('<td class="fl_g"'.($forumcolwidth ? " width=\"$forumcolwidth\"" : '').'></td>', $forumcolumns - $columnspad);}--><!--{/if}-->
                                    </tr>
                                </table>
            
                            </div>
                        </div>
                        <!--{ad/intercat/bm a_c/-1}-->
                    <!--{/if}-->
                    <!--{loop $catlist $key $cat}-->
                        <!--{hook/index_catlist $cat[fid]}-->
                        <div class="bm bmw {if $cat['forumcolumns']} flg{/if} cl">
                            <div class="bm_h cl">
                                <span class="o">
                                    <img id="category_$cat[fid]_img" src="{IMGDIR}/$cat[collapseimg]" title="{lang spread}" alt="{lang spread}" onclick="toggle_collapse('category_$cat[fid]');" />
                                </span>
                                <!--{if $cat['moderators']}--><span class="y">{lang forum_category_modedby}: $cat[moderators]</span><!--{/if}-->
                                <!--{eval $caturl = !empty($cat['domain']) && !empty($_G['setting']['domain']['root']['forum']) ? 'http://'.$cat['domain'].'.'.$_G['setting']['domain']['root']['forum'] : '';}-->
                                <h4><a href="{if !empty($caturl)}$caturl{else}forum.php?gid=$cat[fid]{/if}" style="{if $cat[extra][namecolor]}color: {$cat[extra][namecolor]};{/if}">$cat[name]</a></h4>
                            </div>
                            <div id="category_$cat[fid]" class="bm_c" style="{echo $collapse['category_'.$cat[fid]]}">
                                <table cellspacing="0" cellpadding="0" class="fl_tb">
                                    <tr>
                                    <!--{loop $cat[forums] $forumid}-->
                                    <!--{eval $forum=$forumlist[$forumid];}-->
                                    <!--{eval $forumurl = !empty($forum['domain']) && !empty($_G['setting']['domain']['root']['forum']) ? 'http://'.$forum['domain'].'.'.$_G['setting']['domain']['root']['forum'] : 'forum.php?mod=forumdisplay&fid='.$forum['fid'];}-->
                                    <!--{if $cat['forumcolumns']}-->
                                        <!--{if $forum['orderid'] && ($forum['orderid'] % $cat['forumcolumns'] == 0)}-->
                                            </tr>
                                            <!--{if $forum['orderid'] < $cat['forumscount']}-->
                                                <tr class="fl_row">
                                            <!--{/if}-->
                                        <!--{/if}-->
                                        <td class="fl_g" width="$cat[forumcolwidth]">
                                            <div class="fl_icn_g deanbbs_icon deanactions swing"{if !empty($forum[extra][iconwidth]) && !empty($forum[icon])} style="width: {$forum[extra][iconwidth]}px;"{/if}>
                                            <!--{if $forum[icon]}-->
                                                $forum[icon]
                                            <!--{else}-->
                                                <a href="$forumurl"{if $forum[redirect]} target="_blank"{/if}><img src="{IMGDIR}/forum{if $forum[folder]}_new{/if}.gif" alt="$forum[name]" /></a>
                                            <!--{/if}-->
                                            <!--{if $forum[todayposts] && !$forum['redirect']}-->
                                                <div class="deantodayposts_bbs" title="{lang forum_todayposts}"> $forum[todayposts]</div>
                                            <!--{/if}-->
                                            </div>
                                            <dl{if !empty($forum[extra][iconwidth]) && !empty($forum[icon])} style="margin-left: {$forum[extra][iconwidth]}px;"{/if}>
                                                <dt>
                                                	<a href="$forumurl"{if $forum[redirect]} target="_blank"{/if}{if $forum[extra][namecolor]} style="color: {$forum[extra][namecolor]};"{/if}>$forum[name]</a>
                                                    
                                                    <!--{if empty($forum[redirect])}-->
                                                    <em>{lang forum_threads}: <!--{echo dnumber($forum[threads])}--></em>, <em>{lang forum_posts}: <!--{echo dnumber($forum[posts])}--></em>
                                                    <!--{/if}-->
                                                </dt>
                                                
                                                <!--{if $forum[description]}--><dd class="xg2">$forum[description]</dd><!--{/if}-->
                                                
                                                <dd>
                                                <!--{if $forum['permission'] == 1}-->
                                                    {lang private_forum}
                                                <!--{else}-->
                                                    <!--{if $forum['redirect']}-->
                                                        <a href="$forumurl" class="xi2">{lang url_link}</a>
                                                    <!--{elseif is_array($forum['lastpost'])}-->
                                                        <!--{if $cat['forumcolumns'] < 3}-->
                                                            <a href="forum.php?mod=redirect&tid=$forum[lastpost][tid]&goto=lastpost#lastpost" class="xi2"><!--{echo cutstr($forum[lastpost][subject], 30)}--></a> <cite>$forum[lastpost][dateline] <!--{if $forum['lastpost']['author']}-->$forum['lastpost']['author']<!--{else}-->$_G[setting][anonymoustext]<!--{/if}--></cite>
                                                        <!--{else}-->
                                                            <a href="forum.php?mod=redirect&tid=$forum[lastpost][tid]&goto=lastpost#lastpost">{lang forum_lastpost}: $forum[lastpost][dateline]</a>
                                                        <!--{/if}-->
                                                    <!--{else}-->
                                                        <em>本版还没有任何帖子</em>
                                                    <!--{/if}-->
                                                <!--{/if}-->
                                                </dd>
                                                <!--{hook/index_forum_extra $forum[fid]}-->
                                                <!--{hook/index_followcollection_extra $colletion[ctid]}-->
                                            </dl>
                                        </td>
                                    <!--{else}-->
                                        <td class="fl_icn" {if !empty($forum[extra][iconwidth]) && !empty($forum[icon])} style="width: {$forum[extra][iconwidth]}px;"{/if}>
                                            <!--{if $forum[icon]}-->
                                                $forum[icon]
                                            <!--{else}-->
                                                <a href="$forumurl"{if $forum[redirect]} target="_blank"{/if}><img src="{IMGDIR}/forum{if $forum[folder]}_new{/if}.gif" alt="$forum[name]" /></a>
                                            <!--{/if}-->
                                        </td>
                                        <td>
                                            <h2><a href="$forumurl"{if $forum[redirect]} target="_blank"{/if}{if $forum[extra][namecolor]} style="color: {$forum[extra][namecolor]};"{/if}>$forum[name]</a><!--{if $forum[todayposts] && !$forum['redirect']}--><em class="xw0 xi1" title="{lang forum_todayposts}"> ($forum[todayposts])</em><!--{/if}--></h2>
                                            <!--{if $forum[description]}--><p class="xg2">$forum[description]</p><!--{/if}-->
                                            <!--{if $forum['subforums']}--><p>{lang forum_subforums}: $forum['subforums']</p><!--{/if}-->
                                            <!--{if $forum['moderators']}--><p>{lang forum_moderators}: <span class="xi2">$forum[moderators]</span></p><!--{/if}-->
                                            <!--{hook/index_forum_extra $forum[fid]}-->
                                        </td>
                                        <td class="fl_i">
                                            <!--{if empty($forum[redirect])}--><span class="xi2"><!--{echo dnumber($forum[threads])}--></span><span class="xg1"> / <!--{echo dnumber($forum[posts])}--></span><!--{/if}-->
                                        </td>
                                        <td class="fl_by">
                                            <div>
                                            <!--{if $forum['permission'] == 1}-->
                                                {lang private_forum}
                                            <!--{else}-->
                                                <!--{if $forum['redirect']}-->
                                                    <a href="$forumurl" class="xi2">{lang url_link}</a>
                                                <!--{elseif is_array($forum['lastpost'])}-->
                                                    <a href="forum.php?mod=redirect&tid=$forum[lastpost][tid]&goto=lastpost#lastpost" class="xi2"><!--{echo cutstr($forum[lastpost][subject], 30)}--></a> <cite>$forum[lastpost][dateline] <!--{if $forum['lastpost']['author']}-->$forum['lastpost']['author']<!--{else}-->$_G[setting][anonymoustext]<!--{/if}--></cite>
                                                <!--{else}-->
                                                    {lang never}
                                                <!--{/if}-->
                                            <!--{/if}-->
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="fl_row">
                                    <!--{/if}-->
                                    <!--{/loop}-->
                                    $cat['endrows']
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <!--{ad/intercat/bm a_c/$cat[fid]}-->
                    <!--{/loop}-->
                    </div>
            
                    <!--{hook/index_middle}-->
                    <div class="mtn">
                        <!--[diy=diy3]--><div id="diy3" class="area"></div><!--[/diy]-->
                    </div>
            
                    <!--{if empty($gid) && $_G['setting']['whosonlinestatus']}-->
                        <div id="online" class="bm oll">
                            <div class="bm_h">
                            <!--{if $detailstatus}-->
                                <span class="o"><a href="forum.php?showoldetails=no#online" title="{lang spread}"><img src="{IMGDIR}/collapsed_no.gif" alt="{lang spread}" /></a></span>
                                <h3>
                                    <strong><a href="home.php?mod=space&do=friend&view=online&type=member">{lang onlinemember}</a></strong>
                                    <span class="xs1">- <strong>$onlinenum</strong> {lang onlines}
                                    - <strong>$membercount</strong> {lang index_members}(<strong>$invisiblecount</strong> {lang index_invisibles}),
                                    <strong>$guestcount</strong> {lang index_guests}
                                    - {lang index_mostonlines} <strong>$onlineinfo[0]</strong> {lang on} <strong>$onlineinfo[1]</strong>.</span>
                                </h3>
                            <!--{else}-->
                                <!--{if empty($_G['setting']['sessionclose'])}-->
                                    <span class="o"><a href="forum.php?showoldetails=yes#online" title="{lang spread}"><img src="{IMGDIR}/collapsed_yes.gif" alt="{lang spread}" /></a></span>
                                <!--{/if}-->
                                <h3>
                                    <strong>
                                        <!--{if !empty($_G['setting']['whosonlinestatus'])}-->
                                            {lang onlinemember}
                                        <!--{else}-->
                                            <a href="home.php?mod=space&do=friend&view=online&type=member">{lang onlinemember}</a>
                                        <!--{/if}-->
                                    </strong>
                                    <span class="xs1">- {lang total} <strong>$onlinenum</strong> {lang onlines}
                                    <!--{if $membercount}-->- <strong>$membercount</strong> {lang index_members},<strong>$guestcount</strong> {lang index_guests}<!--{/if}-->
                                    - {lang index_mostonlines} <strong>$onlineinfo[0]</strong> {lang on} <strong>$onlineinfo[1]</strong>.</span>
                                </h3>
                            <!--{/if}-->
                            </div>
                        <!--{if $_G['setting']['whosonlinestatus'] && $detailstatus}-->
                            <dl id="onlinelist" class="bm_c">
                                <dt class="ptm pbm bbda">$_G[cache][onlinelist][legend]</dt>
                                <!--{if $detailstatus}-->
                                    <dd class="ptm pbm">
                                    <ul class="cl">
                                    <!--{if $whosonline}-->
                                        <!--{loop $whosonline $key $online}-->
                                            <li title="{lang time}: $online[lastactivity]">
                                            <img src="{STATICURL}image/common/$online[icon]" alt="icon" />
                                            <!--{if $online['uid']}-->
                                                <a href="home.php?mod=space&uid=$online[uid]">$online[username]</a>
                                            <!--{else}-->
                                                $online[username]
                                            <!--{/if}-->
                                            </li>
                                        <!--{/loop}-->
                                    <!--{else}-->
                                        <li style="width: auto">{lang online_only_guests}</li>
                                    <!--{/if}-->
                                    </ul>
                                </dd>
                                <!--{/if}-->
                            </dl>
                        <!--{/if}-->
                        </div>
                    <!--{/if}-->
                    <!--{if empty($gid) && ($_G['cache']['forumlinks'][0] || $_G['cache']['forumlinks'][1] || $_G['cache']['forumlinks'][2])}-->
                    <div class="bm lk">
                        <div id="category_lk" class="bm_c ptm">
                            <!--{if $_G['cache']['forumlinks'][0]}-->
                                <ul class="m mbn cl">$_G['cache']['forumlinks'][0]</ul>
                            <!--{/if}-->
                            <!--{if $_G['cache']['forumlinks'][1]}-->
                                <div class="mbn cl">
                                    $_G['cache']['forumlinks'][1]
                                </div>
                            <!--{/if}-->
                            <!--{if $_G['cache']['forumlinks'][2]}-->
                                <ul class="x mbm cl">
                                    $_G['cache']['forumlinks'][2]
                                </ul>
                            <!--{/if}-->
                        </div>
                    </div>
                    <!--{/if}-->
            
                    
                    
            
            
                    <!--{hook/index_bottom}-->
                </div>
            
        
            <!--{if $_G['setting']['forumallowside']}-->
                <div id="sd" class="sd">
                    <!--{hook/index_side_top}-->
                    <div class="drag">
                        <!--[diy=diy2]--><div id="diy2" class="area"></div><!--[/diy]-->
                    </div>
                    <!--推荐阅读-->
                    <div class="deansideboxs deanactions fadeInUp">
                    	<div class="deansidetitle">推荐阅读<a href="#" target="_blank">更多+</a><div class="clear"></div></div>
                        <div class="deantjdybox">
                        	<div class="deantjdypics">
                            	<!--[diy=deantjdypics]--><div id="deantjdypics" class="area"></div><!--[/diy]-->
                            	
                            </div>
                        </div>
                        <div class="deantjlists">
                        	<ul>
                            	<!--[diy=deantjlists]--><div id="deantjlists" class="area"></div><!--[/diy]-->
                            	
                            </ul>
                        </div>
                    </div>
                     <!--广告位-->
                    <div class="deansideboxs deanactions fadeInUp">
                    	<div class="deansidetitle">广告位<div class="clear"></div></div>
                        <div class="deanadsside">
                        	<!--[diy=deanadsside]--><div id="deanadsside" class="area"></div><!--[/diy]-->
                        	
                        </div>
                        
                    </div>
                    
                    
                    <!--{hook/index_side_bottom}-->
                </div>
            <!--{/if}-->
        </div>
    
        
    </div>
    

<!--{if $_G['group']['radminid'] == 1}-->
	<!--{eval helper_manyou::checkupdate();}-->
<!--{/if}-->
<!--{if empty($_G['setting']['disfixednv_forumindex']) }--><script>fixed_top_nv();</script><!--{/if}-->
<!--{template common/footer}-->
