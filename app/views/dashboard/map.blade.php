@section('body')

		<div class="col-md-12">
        <div class="box box-magenta">
            <div class="box-title">
                <h3><i class="fa fa-globe"></i> Markers</h3>
                <div class="box-tool">
                    <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                    <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                </div>
            </div>
            <div class="box-content">
                <div class="gmap" id="gmap-markers" style="position: relative; background-color: rgb(229, 227, 223); overflow: hidden;"><div class="gm-style" style="position: absolute; left: 0px; top: 0px; overflow: hidden; width: 100%; height: 100%; z-index: 0;"><div style="position: absolute; left: 0px; top: 0px; overflow: hidden; width: 100%; height: 100%; z-index: 0; cursor: url(http://maps.gstatic.com/mapfiles/openhand_8_8.cur) 8 8, default;"><div style="position: absolute; left: 0px; top: 0px; z-index: 1; width: 100%; -webkit-transform-origin: 0px 0px; -webkit-transform: matrix(1, 0, 0, 1, 0, 0);"><div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div style="position: absolute; left: 0px; top: 0px; z-index: 1;"><div style="width: 256px; height: 256px; position: absolute; left: 101px; top: 79px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 357px; top: 79px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 101px; top: -177px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 101px; top: 335px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 357px; top: -177px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 357px; top: 335px;"></div><div style="width: 256px; height: 256px; position: absolute; left: -155px; top: 79px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 613px; top: 79px;"></div><div style="width: 256px; height: 256px; position: absolute; left: -155px; top: -177px;"></div><div style="width: 256px; height: 256px; position: absolute; left: -155px; top: 335px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 613px; top: -177px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 613px; top: 335px;"></div></div></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: -1;"><div style="position: absolute; left: 0px; top: 0px; z-index: 1;"><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 101px; top: 79px;"><canvas draggable="false" height="256" width="256" style="-webkit-user-select: none; position: absolute; left: 0px; top: 0px; height: 256px; width: 256px;"></canvas></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 357px; top: 79px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 101px; top: -177px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 101px; top: 335px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 357px; top: -177px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 357px; top: 335px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -155px; top: 79px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 613px; top: 79px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -155px; top: -177px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -155px; top: 335px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 613px; top: -177px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 613px; top: 335px;"></div></div></div></div><div style="position: absolute; z-index: 0; left: 0px; top: 0px;"><div style="overflow: hidden; width: 565px; height: 350px;"><img src="http://maps.googleapis.com/maps/api/js/StaticMapService.GetMapImage?1m2&amp;1i2399131&amp;2i4476849&amp;2e1&amp;3u15&amp;4m2&amp;1u565&amp;2u350&amp;5m6&amp;1e0&amp;5sen-US&amp;6sus&amp;10b1&amp;11b1&amp;12b1&amp;token=94682" style="width: 565px; height: 350px;"></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div style="position: absolute; left: 0px; top: 0px; z-index: 1;"><div style="width: 256px; height: 256px; position: absolute; left: 613px; top: 79px; opacity: 1; transition: opacity 200ms ease-out; -webkit-transition: opacity 200ms ease-out;"><img src="http://mt0.googleapis.com/vt?pb=!1m4!1m3!1i15!2i9374!3i17488!2m3!1e0!2sm!3i279000000!3m9!2sen-US!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0!20m1!1b1" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 613px; top: -177px; opacity: 1; transition: opacity 200ms ease-out; -webkit-transition: opacity 200ms ease-out;"><img src="http://mt0.googleapis.com/vt?pb=!1m4!1m3!1i15!2i9374!3i17487!2m3!1e0!2sm!3i279000000!3m9!2sen-US!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0!20m1!1b1" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div style="width: 256px; height: 256px; position: absolute; left: -155px; top: 335px; opacity: 1; transition: opacity 200ms ease-out; -webkit-transition: opacity 200ms ease-out;"><img src="http://mt1.googleapis.com/vt?pb=!1m4!1m3!1i15!2i9371!3i17489!2m3!1e0!2sm!3i279059336!3m9!2sen-US!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0!20m1!1b1" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div style="width: 256px; height: 256px; position: absolute; left: -155px; top: 79px; opacity: 1; transition: opacity 200ms ease-out; -webkit-transition: opacity 200ms ease-out;"><img src="http://mt1.googleapis.com/vt?pb=!1m4!1m3!1i15!2i9371!3i17488!2m3!1e0!2sm!3i279049389!3m9!2sen-US!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0!20m1!1b1" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 357px; top: 335px; opacity: 1; transition: opacity 200ms ease-out; -webkit-transition: opacity 200ms ease-out;"><img src="http://mt1.googleapis.com/vt?pb=!1m4!1m3!1i15!2i9373!3i17489!2m3!1e0!2sm!3i279049389!3m9!2sen-US!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0!20m1!1b1" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div style="width: 256px; height: 256px; position: absolute; left: -155px; top: -177px; opacity: 1; transition: opacity 200ms ease-out; -webkit-transition: opacity 200ms ease-out;"><img src="http://mt1.googleapis.com/vt?pb=!1m4!1m3!1i15!2i9371!3i17487!2m3!1e0!2sm!3i279049389!3m9!2sen-US!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0!20m1!1b1" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 357px; top: -177px; opacity: 1; transition: opacity 200ms ease-out; -webkit-transition: opacity 200ms ease-out;"><img src="http://mt1.googleapis.com/vt?pb=!1m4!1m3!1i15!2i9373!3i17487!2m3!1e0!2sm!3i279049389!3m9!2sen-US!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0!20m1!1b1" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 101px; top: 335px; opacity: 1; transition: opacity 200ms ease-out; -webkit-transition: opacity 200ms ease-out;"><img src="http://mt0.googleapis.com/vt?pb=!1m4!1m3!1i15!2i9372!3i17489!2m3!1e0!2sm!3i279051270!3m9!2sen-US!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0!20m1!1b1" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 101px; top: -177px; opacity: 1; transition: opacity 200ms ease-out; -webkit-transition: opacity 200ms ease-out;"><img src="http://mt0.googleapis.com/vt?pb=!1m4!1m3!1i15!2i9372!3i17487!2m3!1e0!2sm!3i279049389!3m9!2sen-US!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0!20m1!1b1" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 357px; top: 79px; opacity: 1; transition: opacity 200ms ease-out; -webkit-transition: opacity 200ms ease-out;"><img src="http://mt1.googleapis.com/vt?pb=!1m4!1m3!1i15!2i9373!3i17488!2m3!1e0!2sm!3i279049389!3m9!2sen-US!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0!20m1!1b1" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 613px; top: 335px; opacity: 1; transition: opacity 200ms ease-out; -webkit-transition: opacity 200ms ease-out;"><img src="http://mt0.googleapis.com/vt?pb=!1m4!1m3!1i15!2i9374!3i17489!2m3!1e0!2sm!3i279021238!3m9!2sen-US!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0!20m1!1b1" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 101px; top: 79px; opacity: 1; transition: opacity 200ms ease-out; -webkit-transition: opacity 200ms ease-out;"><img src="http://mt0.googleapis.com/vt?pb=!1m4!1m3!1i15!2i9372!3i17488!2m3!1e0!2sm!3i279049389!3m9!2sen-US!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0!20m1!1b1" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div></div></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 2; width: 100%; height: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 3; width: 100%; -webkit-transform-origin: 0px 0px; -webkit-transform: matrix(1, 0, 0, 1, 0, 0);"><div style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"></div></div></div><div style="margin-left: 5px; margin-right: 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;"><a target="_blank" href="http://maps.google.com/maps?ll=-12.043333,-77.028333&amp;z=15&amp;t=m&amp;hl=en-US&amp;gl=US&amp;mapclient=apiv3" title="Click to see this area on Google Maps" style="position: static; overflow: visible; float: none; display: inline;"><div style="width: 62px; height: 26px; cursor: pointer;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/google_white2.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 62px; height: 26px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div></a></div><div class="gmnoprint" style="z-index: 1000001; position: absolute; right: 272px; bottom: 0px; width: 122px;"><div draggable="false" class="gm-style-cc" style="-webkit-user-select: none;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right;"><a style="color: rgb(68, 68, 68); text-decoration: none; cursor: pointer; display: none;">Map Data</a><span>Map data ©2014 Google</span></div></div></div><div style="background-color: white; padding: 15px 21px; border: 1px solid rgb(171, 171, 171); font-family: Roboto, Arial, sans-serif; color: rgb(34, 34, 34); -webkit-box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 16px; box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 16px; z-index: 10000002; display: none; width: 256px; height: 148px; position: absolute; left: 133px; top: 85px;"><div style="padding: 0px 0px 10px; font-size: 16px;">Map Data</div><div style="font-size: 13px;">Map data ©2014 Google</div><div style="width: 13px; height: 13px; overflow: hidden; position: absolute; opacity: 0.7; right: 12px; top: 12px; z-index: 10000; cursor: pointer;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/mapcnt3.png" draggable="false" style="position: absolute; left: -2px; top: -336px; width: 59px; height: 492px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div></div><div class="gmnoscreen" style="position: absolute; right: 0px; bottom: 0px;"><div style="font-family: Roboto, Arial, sans-serif; font-size: 11px; color: rgb(68, 68, 68); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);">Map data ©2014 Google</div></div><div class="gmnoprint gm-style-cc" draggable="false" style="z-index: 1000001; position: absolute; -webkit-user-select: none; right: 114px; bottom: 0px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right;"><a href="http://www.google.com/intl/en-US_US/help/terms_maps.html" target="_blank" style="text-decoration: none; cursor: pointer; color: rgb(68, 68, 68);">Terms of Use</a></div></div><div draggable="false" class="gm-style-cc" style="-webkit-user-select: none; position: absolute; right: 18px; bottom: 0px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right;"><a target="_new" title="Report errors in the road map or imagery to Google" href="http://maps.google.com/maps?ll=-12.043333,-77.028333&amp;z=15&amp;t=m&amp;hl=en-US&amp;gl=US&amp;mapclient=apiv3&amp;skstate=action:mps_dialog$apiref:1&amp;output=classic" style="font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); text-decoration: none; position: relative;">Report a map error</a></div></div><div class="gmnoprint" draggable="false" style="position: absolute; -webkit-user-select: none; margin-left: 5px; margin-top: 5px; width: 13px; height: 13px; right: 0px; bottom: 0px;"><div style="background-color: rgb(255, 255, 255); overflow: hidden; width: 120px; height: 120px; display: none;"><div style="position: absolute; left: 3px; top: 3px; width: 117px; height: 117px; background-color: rgb(229, 227, 223); overflow: hidden;"><div class="gm-style" style="position: absolute; left: 0px; top: 0px; overflow: hidden; width: 100%; height: 100%; z-index: 0;"><div style="position: absolute; left: 0px; top: 0px; overflow: hidden; width: 100%; height: 100%; z-index: 0; cursor: url(http://maps.gstatic.com/mapfiles/openhand_8_8.cur) 8 8, default;"><div style="position: absolute; left: 0px; top: 0px; z-index: 1; width: 100%; -webkit-transform-origin: 0px 0px; -webkit-transform: matrix(1, 0, 0, 1, 0, 0);"><div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div style="position: absolute; left: 0px; top: 0px; z-index: 1;"><div style="width: 256px; height: 256px; position: absolute; left: -151px; top: -268px;"></div><div style="width: 256px; height: 256px; position: absolute; left: -151px; top: -12px;"></div></div></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;"></div><div style="position: absolute; z-index: 0; left: 0px; top: 0px;"><div style="overflow: hidden;"></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div style="position: absolute; left: 0px; top: 0px; z-index: 1;"><div style="width: 256px; height: 256px; position: absolute; left: -151px; top: -268px; opacity: 1; transition: opacity 200ms ease-out; -webkit-transition: opacity 200ms ease-out;"><img src="http://mt1.googleapis.com/vt?pb=!1m4!1m3!1i12!2i1171!3i2185!2m3!1e0!2sm!3i279000000!3m9!2sen-US!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0!20m1!1b1" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div style="width: 256px; height: 256px; position: absolute; left: -151px; top: -12px; opacity: 1; transition: opacity 200ms ease-out; -webkit-transition: opacity 200ms ease-out;"><img src="http://mt1.googleapis.com/vt?pb=!1m4!1m3!1i12!2i1171!3i2186!2m3!1e0!2sm!3i279000000!3m9!2sen-US!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0!20m1!1b1" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div></div></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 2; width: 100%; height: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 3; width: 100%; -webkit-transform-origin: 0px 0px; -webkit-transform: matrix(1, 0, 0, 1, 0, 0);"><div style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;"><div style="border: 1px solid rgb(255, 255, 255); outline: rgb(0, 0, 0) solid 1px; opacity: 0.35; position: absolute; margin-top: -22px; margin-left: -35px; width: 71px; height: 44px; left: 0px; top: 0px;"><div style="position: absolute; background-color: rgb(0, 0, 0); opacity: 0.7; width: 71px; height: 44px; background-position: initial initial; background-repeat: initial initial;"></div></div><div style="border: 1px solid rgb(255, 255, 255); outline: rgb(0, 0, 0) solid 1px; opacity: 0.35; position: absolute; cursor: url(http://maps.gstatic.com/mapfiles/openhand_8_8.cur) 8 8, default; margin-top: -22px; margin-left: -35px; width: 71px; height: 44px; left: 0px; top: 0px;"><div style="position: absolute; width: 71px; height: 44px;"></div></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"></div></div></div></div></div></div><div style="width: 13px; height: 13px; position: absolute; cursor: pointer; left: 0px; top: 0px;"><div title="Open the overview map" style="width: 13px; height: 13px; overflow: hidden; position: absolute;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/mapcnt3.png" draggable="false" style="position: absolute; left: -2px; top: -364px; width: 59px; height: 492px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div></div></div><div class="gmnoprint" draggable="false" controlwidth="78" controlheight="169" style="margin: 5px; -webkit-user-select: none; position: absolute; left: 0px; top: 0px;"><div class="gmnoprint" controlwidth="78" controlheight="80" style="cursor: url(http://maps.gstatic.com/mapfiles/openhand_8_8.cur) 8 8, default; width: 78px; height: 78px; position: absolute; left: 0px; top: 0px;"><div class="gmnoprint" controlwidth="78" controlheight="80" style="width: 78px; height: 78px; position: absolute; left: 0px; top: 0px;"><div style="visibility: hidden;"><svg version="1.1" overflow="hidden" width="78px" style="position: absolute; left: 0px; top: 0px;" height="78px" viewBox="0 0 78 78"><circle cx="39" cy="39" r="35" stroke-width="3" fill-opacity="0.2" fill="#f2f4f6" stroke="#f2f4f6"></circle><g transform="rotate(0 39 39)"><rect x="33" y="0" rx="4" ry="4" width="12" height="11" stroke="#a6a6a6" stroke-width="1" fill="#f2f4f6"></rect><polyline points="36.5,8.5 36.5,2.5 41.5,8.5 41.5,2.5" stroke-linejoin="bevel" stroke-width="1.5" fill="#f2f4f6" stroke="#000"></polyline></g></svg></div></div><div class="gmnoprint" controlwidth="59" controlheight="59" style="position: absolute; left: 10px; top: 11px;"><div style="width: 59px; height: 59px; overflow: hidden; position: relative;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/mapcnt3.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 59px; height: 492px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"><div title="Pan left" style="position: absolute; left: 0px; top: 20px; width: 19.666666666666668px; height: 19.666666666666668px; cursor: pointer;"></div><div title="Pan right" style="position: absolute; left: 39px; top: 20px; width: 19.666666666666668px; height: 19.666666666666668px; cursor: pointer;"></div><div title="Pan up" style="position: absolute; left: 20px; top: 0px; width: 19.666666666666668px; height: 19.666666666666668px; cursor: pointer;"></div><div title="Pan down" style="position: absolute; left: 20px; top: 39px; width: 19.666666666666668px; height: 19.666666666666668px; cursor: pointer;"></div></div></div></div><div controlwidth="32" controlheight="40" style="cursor: url(http://maps.gstatic.com/mapfiles/openhand_8_8.cur) 8 8, default; position: absolute; left: 23px; top: 85px;"><div style="width: 32px; height: 40px; overflow: hidden; position: absolute; left: 0px; top: 0px;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/cb_scout2.png" draggable="false" style="position: absolute; left: -9px; top: -102px; width: 1028px; height: 214px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div style="width: 32px; height: 40px; overflow: hidden; position: absolute; left: 0px; top: 0px; visibility: hidden;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/cb_scout2.png" draggable="false" style="position: absolute; left: -107px; top: -102px; width: 1028px; height: 214px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div style="width: 32px; height: 40px; overflow: hidden; position: absolute; left: 0px; top: 0px; visibility: hidden;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/cb_scout2.png" draggable="false" style="position: absolute; left: -58px; top: -102px; width: 1028px; height: 214px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div style="width: 32px; height: 40px; overflow: hidden; position: absolute; left: 0px; top: 0px; visibility: hidden;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/cb_scout2.png" draggable="false" style="position: absolute; left: -205px; top: -102px; width: 1028px; height: 214px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div></div><div class="gmnoprint" controlwidth="0" controlheight="0" style="opacity: 0.6; display: none; position: absolute;"><div title="Rotate map 90 degrees" style="width: 22px; height: 22px; overflow: hidden; position: absolute; cursor: pointer;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/mapcnt3.png" draggable="false" style="position: absolute; left: -38px; top: -360px; width: 59px; height: 492px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div></div><div class="gmnoprint" controlwidth="20" controlheight="39" style="position: absolute; left: 29px; top: 130px;"><div style="width: 20px; height: 39px; overflow: hidden; position: absolute;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/mapcnt3.png" draggable="false" style="position: absolute; left: -39px; top: -401px; width: 59px; height: 492px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div title="Zoom in" style="position: absolute; left: 0px; top: 2px; width: 20px; height: 17px; cursor: pointer;"></div><div title="Zoom out" style="position: absolute; left: 0px; top: 19px; width: 20px; height: 17px; cursor: pointer;"></div></div></div><div class="gmnoprint" style="margin: 5px; z-index: 0; position: absolute; cursor: pointer; right: 0px; top: 0px;"><div class="gm-style-mtc" style="float: left;"><div draggable="false" title="Show street map" style="direction: ltr; overflow: hidden; text-align: center; position: relative; color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; -webkit-user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 1px 6px; border-bottom-left-radius: 2px; border-top-left-radius: 2px; -webkit-background-clip: padding-box; background-clip: padding-box; border: 1px solid rgba(0, 0, 0, 0.14902); -webkit-box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; min-width: 23px; font-weight: 500;">Map</div><div style="background-color: white; z-index: -1; padding-top: 2px; -webkit-background-clip: padding-box; background-clip: padding-box; border-width: 0px 1px 1px; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-right-color: rgba(0, 0, 0, 0.14902); border-bottom-color: rgba(0, 0, 0, 0.14902); border-left-color: rgba(0, 0, 0, 0.14902); -webkit-box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; position: absolute; left: 0px; top: 19px; text-align: left; display: none;"><div draggable="false" title="Show street map with terrain" style="color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; -webkit-user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 3px 8px 3px 3px; direction: ltr; text-align: left; white-space: nowrap;"><span role="checkbox" style="box-sizing: border-box; position: relative; line-height: 0; font-size: 0px; margin: 0px 5px 0px 0px; display: inline-block; background-color: rgb(255, 255, 255); border: 1px solid rgb(198, 198, 198); border-top-left-radius: 1px; border-top-right-radius: 1px; border-bottom-right-radius: 1px; border-bottom-left-radius: 1px; width: 13px; height: 13px; vertical-align: middle;"><div style="position: absolute; left: 1px; top: -2px; width: 13px; height: 11px; overflow: hidden; display: none;"><img src="http://maps.gstatic.com/mapfiles/mv/imgs8.png" draggable="false" style="position: absolute; left: -52px; top: -44px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; width: 68px; height: 67px;"></div></span><label style="vertical-align: middle; cursor: pointer;">Terrain</label></div></div></div><div class="gm-style-mtc" style="float: left;"><div draggable="false" title="Show satellite imagery" style="direction: ltr; overflow: hidden; text-align: center; position: relative; color: rgb(86, 86, 86); font-family: Roboto, Arial, sans-serif; -webkit-user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 1px 6px; border-bottom-right-radius: 2px; border-top-right-radius: 2px; -webkit-background-clip: padding-box; background-clip: padding-box; border-width: 1px 1px 1px 0px; border-top-style: solid; border-right-style: solid; border-bottom-style: solid; border-top-color: rgba(0, 0, 0, 0.14902); border-right-color: rgba(0, 0, 0, 0.14902); border-bottom-color: rgba(0, 0, 0, 0.14902); -webkit-box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; min-width: 40px;">Satellite</div><div style="background-color: white; z-index: -1; padding-top: 2px; -webkit-background-clip: padding-box; background-clip: padding-box; border-width: 0px 1px 1px; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-right-color: rgba(0, 0, 0, 0.14902); border-bottom-color: rgba(0, 0, 0, 0.14902); border-left-color: rgba(0, 0, 0, 0.14902); -webkit-box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; position: absolute; right: 0px; top: 19px; text-align: left; display: none;"><div draggable="false" title="Zoom in to show 45 degree view" style="color: rgb(184, 184, 184); font-family: Roboto, Arial, sans-serif; -webkit-user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 3px 8px 3px 3px; direction: ltr; text-align: left; white-space: nowrap; display: none;"><span role="checkbox" style="box-sizing: border-box; position: relative; line-height: 0; font-size: 0px; margin: 0px 5px 0px 0px; display: inline-block; background-color: rgb(255, 255, 255); border: 1px solid rgb(241, 241, 241); border-top-left-radius: 1px; border-top-right-radius: 1px; border-bottom-right-radius: 1px; border-bottom-left-radius: 1px; width: 13px; height: 13px; vertical-align: middle;"><div style="position: absolute; left: 1px; top: -2px; width: 13px; height: 11px; overflow: hidden; display: none;"><img src="http://maps.gstatic.com/mapfiles/mv/imgs8.png" draggable="false" style="position: absolute; left: -52px; top: -44px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; width: 68px; height: 67px;"></div></span><label style="vertical-align: middle; cursor: pointer;">45°</label></div><div draggable="false" title="Show imagery with street names" style="color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; -webkit-user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 3px 8px 3px 3px; direction: ltr; text-align: left; white-space: nowrap;"><span role="checkbox" style="box-sizing: border-box; position: relative; line-height: 0; font-size: 0px; margin: 0px 5px 0px 0px; display: inline-block; background-color: rgb(255, 255, 255); border: 1px solid rgb(198, 198, 198); border-top-left-radius: 1px; border-top-right-radius: 1px; border-bottom-right-radius: 1px; border-bottom-left-radius: 1px; width: 13px; height: 13px; vertical-align: middle;"><div style="position: absolute; left: 1px; top: -2px; width: 13px; height: 11px; overflow: hidden;"><img src="http://maps.gstatic.com/mapfiles/mv/imgs8.png" draggable="false" style="position: absolute; left: -52px; top: -44px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; width: 68px; height: 67px;"></div></span><label style="vertical-align: middle; cursor: pointer;">Labels</label></div></div></div></div><div draggable="false" class="gm-style-cc" style="-webkit-user-select: none; position: absolute; right: 186px; bottom: 0px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right;"><span>200 m&nbsp;</span><div style="position: relative; display: inline-block; height: 8px; bottom: -1px; width: 43px;"><div style="width: 100%; height: 4px; position: absolute; background-color: rgb(255, 255, 255); bottom: 0px; left: 0px;"></div><div style="position: absolute; left: 0px; top: 0px; width: 4px; height: 8px; background-color: rgb(255, 255, 255);"></div><div style="width: 4px; height: 8px; position: absolute; background-color: rgb(255, 255, 255); bottom: 0px; right: 0px;"></div><div style="position: absolute; background-color: rgb(102, 102, 102); height: 2px; bottom: 1px; right: 1px; left: 1px;"></div><div style="position: absolute; left: 1px; top: 1px; width: 2px; height: 6px; background-color: rgb(102, 102, 102);"></div><div style="width: 2px; height: 6px; position: absolute; background-color: rgb(102, 102, 102); bottom: 1px; right: 1px;"></div></div></div></div></div></div>
            </div>
        </div>
    </div>

		<script>window.jQuery || document.write('<script src="assets/jquery/jquery-1.10.1.min.js"><\/script>')</script>
        <script src="assets/bootstrap/bootstrap.min.js"></script>
        <script src="assets/nicescroll/jquery.nicescroll.min.js"></script>
        <script src="assets/jquery-cookie/jquery.cookie.js"></script>

        <!--page specific plugin scripts-->
        <script src="assets/flot/jquery.flot.js"></script>
        <script src="assets/flot/jquery.flot.resize.js"></script>
        <script src="assets/flot/jquery.flot.pie.js"></script>
        <script src="assets/flot/jquery.flot.stack.js"></script>
        <script src="assets/flot/jquery.flot.crosshair.js"></script>
        <script src="assets/flot/jquery.flot.tooltip.min.js"></script>
        <script src="assets/sparkline/jquery.sparkline.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="assets/jquery-cookie/jquery.cookie.js"></script>
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="http://maps.gstatic.com/maps-api-v3/api/js/18/11/main.js" type="text/javascript"></script>
        <script src="assets/gmaps/gmaps.js"></script>

        <script src="js/flaty.js"></script>
        <script src="js/flaty-demo-codes.js"></script>
        <script type="text/javascript">
                $(document).ready(function(){
                //--------------------------- Google Maps --------------------------------//
                //For more example visit: http://hpneo.github.io/gmaps/examples.html
                //Basic Map------------------------------

                var map_basic = new GMaps({
                    el: '#gmap-basic',
                    lat: -12.043333,
                    lng: -77.028333,
                    zoomControl : true,
                    zoomControlOpt: {
                        style : 'SMALL',
                        position: 'TOP_LEFT'
                    },
                    panControl : false,
                    streetViewControl : false,
                    mapTypeControl: false,
                    overviewMapControl: false
                });

                //Map with markers-------------------------
                var map_markers = new GMaps({
                  div: '#gmap-markers',
                  lat: -12.043333,
                  lng: -77.028333
                });
                map_markers.addMarker({
                  lat: -12.043333,
                  lng: -77.03,
                  title: 'Lima',
                  details: {
                    database_id: 42,
                    author: 'HPNeo'
                  },
                  click: function(e){
                    if(console.log)
                      console.log(e);
                    alert('You clicked in this marker');
                  }
                });
                map_markers.addMarker({
                  lat: -12.042,
                  lng: -77.028333,
                  title: 'Marker with InfoWindow',
                  infoWindow: {
                    content: '<p>HTML Content</p>'
                  }
                });

                //Geolocation-----------------------------
                var map_geolocation = new GMaps({
                  div: '#gmap-geolocation',
                  lat: -12.043333,
                  lng: -77.028333
                });

                GMaps.geolocate({
                  success: function(position){
                    map.setCenter(position.coords.latitude, position.coords.longitude);
                  },
                  error: function(error){
                    //alert('Geolocation failed: '+error.message);
                  },
                  not_supported: function(){
                    //alert("Your browser does not support geolocation");
                  },
                  always: function(){
                    //alert("Done!");
                  }
                });

                //Polylines---------------------------------
                var map_polyline = new GMaps({
                    div: '#gmap-polyline',
                    lat: -12.043333,
                    lng: -77.028333,
                    click: function(e){
                      console.log(e);
                    }
                });

                var path_polylines = [[-12.044012922866312, -77.02470665341184], [-12.05449279282314, -77.03024273281858], [-12.055122327623378, -77.03039293652341], [-12.075917129727586, -77.02764635449216], [-12.07635776902266, -77.02792530422971], [-12.076819390363665, -77.02893381481931], [-12.088527520066453, -77.0241058385925], [-12.090814532191756, -77.02271108990476]];
                
                map_polyline.drawPolyline({
                    path: path_polylines,
                    strokeColor: '#131540',
                    strokeOpacity: 0.6,
                    strokeWeight: 6
                });

                //Polygons-----------------------------------
                var map_polygon = new GMaps({
                    div: '#gmap-polygon',
                    lat: -12.043333,
                    lng: -77.028333
                });

                var path_polygons = [[-12.040397656836609,-77.03373871559225],
                                     [-12.040248585302038,-77.03993927003302],
                                     [-12.050047116528843,-77.02448169303511],
                                     [-12.044804866577001,-77.02154422636042]];

                var polygon = map_polygon.drawPolygon({
                    paths: path_polygons,
                    strokeColor: '#BBD8E9',
                    strokeOpacity: 1,
                    strokeWeight: 3,
                    fillColor: '#BBD8E9',
                    fillOpacity: 0.6
                });

                //Static Map----------------------------------
                var gmap_static_url = GMaps.staticMapURL({
                    size: [$('#gmap-static').width(), 350],
                    lat: -12.043333,
                    lng: -77.028333
                });
                $('<img/>').attr('src', gmap_static_url).appendTo('#gmap-static');

            });
        </script>
@stop
