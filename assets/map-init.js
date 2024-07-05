
function waitForJquery(callback){
    if (typeof $ === 'undefined')
        setTimeout(function(){waitForJquery(callback)},100);
    else
        callback();
}

waitForJquery(async function () {

    var map_wrapper = $('#map-warpper');
    var map_element = $('#map');
    var map_id =  $('#map-warpper').data('map-id');

    function mapAlert(text){
        map_element.append($('<p></p>').text(text));

    }

    try {

        var data = await $.get('https://www.skipperblogs.com/share/map/wordpress/'+map_id+'.json');

        if(data.url === undefined || !data.url){

            mapAlert('Could not fetch map live data. Please check your MAP ID in the plugin settings.');
            return;
        }

        url = {'map_data':data.url}; // url is defined in map.js
        load_articles = data.load_articles;
        site_id = data.site_id;
        navigation_initialized = data.navigation_initialized;
        active_trackings = data.active_trackings;
        sblang = data.sblang;

        Object.keys(data.map_attr).forEach(function (key) {
            map_element.attr(key,data.map_attr[key]);
        });

        if(data.is_windy && data.map_attr['data-key'] === undefined){
            mapAlert('No Windy API key present. To display Windy weather map, you must create a Windy Api key on https://api.windy.com and paste your key in skipperblogs\' map configuration.');
            return;
        }

        if(data.is_windy){
            windyDebug = false;
            map_element.attr('id','windy');
            initWindyMap(map_element);
        }else{
            initMainMap(map_element);
        }
        var visited_countries = '';
        for (let i = 0; i < data.visited_countries.length; i++) {
            visited_countries += '<img src="'+data.visited_countries[i].flag+'" title="'+data.visited_countries[i].name+' alt="'+data.visited_countries[i].name+'">';
        }

        if(data.display_support){
            map_wrapper.append('<div class="sb-logo"><a target="_blank" title="Powered by Skipperblogs" href="https://www.skipperblogs.com?source=ribbon"><img src="https://www.skipperblogs.com/assets/img/logo.svg"><span></span></a></div>');
        }
        if(data.stats.display_stats){

            var map_stats = $('<div id="map-infos" class="'+data.stats.postion+'"><div class="visited-countries">'+visited_countries+'</div></div>').appendTo(map_wrapper);

            if(data.stats.display_last_update) map_stats.append('<div class="info-last-update">'+sblang.map_last_update+' <span>---</span></div>');
            if(data.stats.display_last_position) map_stats.append('<div class="info-last-pos"'+sblang.map_last_postition+' <span>---</span></div>');
            if(data.stats.display_distance) map_stats.append('<div class="info-total-distance">'+sblang.map_total_distance+' <span>---</span></div>');
            if(data.stats.display_avg_speed) map_stats.append('<div class="info-avg-speed">'+sblang.map_avg_speed+' <span>---</span></div>');
            if(data.stats.display_top_speed) map_stats.append('<div class="info-max-speed">'+sblang.map_max_speed+' <span>---</span></div>');
            if(data.stats.display_pace) map_stats.append('<div class="info-pace-day">'+sblang.map_pace+' <span>---</span></div>');
            if(data.stats.display_days_elapsed) map_stats.append('<div class="info-total-days">'+sblang.map_total_days+' <span>---</span></div>');
            if(data.is_windy)map_stats.append('<div class="attributions" style="text-align: right">'+(data.is_windy ? '<a href="https://www.windy.com"><img width="80" class="clickable-size" alt="Windy.com" src="https://www.windy.com/img/logo201802/logo-full-windycom-white.svg"></a>':'')+'</div>')
        }
    }catch (e) {
        mapAlert('Could not fetch map live data. Please check your MAP ID in the plugin settings.');
        return;
    }

});