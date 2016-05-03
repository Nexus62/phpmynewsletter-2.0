        <ul class="toggle">
            <li class="icn_time"><a><?=tr("TIME_SERVER");?> : <span id='ts'></span></a></li>
            <?php
            if($type_serveur=='dedicated'&&$exec_available){
                echo '<li class="icn_queue"><span id="mailq">'.tr("LOOKING_PROGRESS_MAILS").'...</span></li>';
            }
            checkVersion();
            ?>
        </ul>
        <hr/>
        <h3><?=tr("LISTS");?></h3>
        <ul class="toggle">
            <li class="icn_categories"><a href="?page=listes&token=<?=$token;?>&l=l&list_id=<?=@$list_id;?>"><?=tr("LIST_OF_LISTS");?></a></li>
            <li class="icn_new_article"><a href="?page=listes&token=<?=$token;?>&l=c"><?=tr("CREATE_NEW_LIST");?></a></li>
        </ul>
        <h3><?=tr("MENU_SUBSCRIBERS");?></h3>
        <ul class="toggle">
            <li class="icn_add_user"><a href="?page=subscribers&token=<?=$token;?>&list_id=<?=$list_id;?>"><?=tr("SUBSCRIBER_MANAGEMENT");?></a></li>
        </ul>
        <h3><?=tr("MENU_NEWSLETTER");?></h3>
        <ul class="toggle">
            <li class="icn_settings"><a href="?page=newsletterconf&token=<?=$token;?>&list_id=<?=$list_id;?>"><?=tr("NEWSLETTER_CONFIGURATION");?></a></li>
            <li class="icn_settings"><a href="?page=code_html&token=<?=$token;?>&list_id=<?=$list_id;?>"><?=tr("SUBSCRIPTION_HTML_CODE");?></a></li>
        </ul>
        <h3><?=tr("WRITING");?></h3>
        <ul class="toggle">
            <li class="icn_write"><a href="?page=compose&token=<?=$token;?>&list_id=<?=$list_id;?>&op=init"><?=tr("WRITE_AND_SEND_A_MAIL");?></a></li>
        </ul>
        <h3><?=tr("TRACKING");?></h3>
        <ul class="toggle">
            <li class="icn_track"><a href="?page=tracking&token=<?=$token;?>&list_id=<?=$list_id;?>&data=ch"><?=tr("STATS_NUMBER_AND GRAPHICS");?></a></li>
        </ul>
        <?php
        if($type_serveur=='dedicated') {
        ?>
        <h3><?=tr("MANAGEMENT_UNDISTRIBUTED");?></h3>
        <ul class="toggle">
            <li class="icn_bounce"><a href="?page=undisturbed&token=<?=$token;?>&list_id=<?=$list_id;?>"><?=tr("ANALYSIS_OF_RETURNS");?></a></li>
        </ul>
        <?php
        }
        ?>
        <h3><?=tr("MENU_ARCHIVES");?></h3>
        <ul class="toggle">
            <li class="icn_settings"><a href="?page=archives&token=<?=$token;?>&list_id=<?=$list_id;?>"><?=tr("MENU_ARCHIVES");?></a></li>
        </ul>
        <?php
        if($type_serveur=='dedicated'&&$exec_available) { ?>
            <h3><?=tr("MENU_SCHEDULE");?></h3>
            <ul class="toggle">
                <li class="icn_settings"><a href="?page=task&token=<?=$token;?>&list_id=<?=$list_id;?>"><?=tr("MANAGEMENT_SCHEDULED_TASKS");?></a></li>
            </ul>
            <?php
        }
        ?>
        <h3><?=tr("MENU_CONFIG");?></h3>
        <ul class="toggle">
            <li class="icn_settings"><a href="?page=config&token=<?=$token;?>&list_id=<?=$list_id;?>"><?=tr("GCONFIG_TITLE");?></a></li>
            <?php
                if($row_config_globale['sending_method']=='lbsmtp'){
                    echo '<li class="icn_settings"><a href="?page=configsmtp&token='.$token.'&list_id='.$list_id.'">'.tr("GCONFIG_SMTP_LB_TITLE").'</a></li>';
                }
            ?>
            <li class="icn_jump_back"><a href="logout.php"><?=tr("MENU_LOGOUT");?></a></li>
        </ul>
        <footer>
        </footer>