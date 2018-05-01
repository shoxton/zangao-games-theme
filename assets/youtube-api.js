(function($) {

    var apiKey = 'AIzaSyAJLwSRq5p67py_CFpnxNtpw2ShSkWM8tQ';
    //Youtube requests
    $(document).ready(function(){
        channelData();
        getVideos();
        getLive();

        function channelData() {

            var channelContainer = document.getElementById('channel-thumb');
            var youtubeDataAPIChannelEndPoint = 'https://www.googleapis.com/youtube/v3/channels?part=snippet&id=UC8racR0Ko9HzKpIBAPvifKw&key=' + apiKey + '';

            var youtubeDataAPI = new XMLHttpRequest();
            youtubeDataAPI.open('GET', youtubeDataAPIChannelEndPoint );
            youtubeDataAPI.onload = function() {
                if (youtubeDataAPI.status >= 200 && youtubeDataAPI.status < 400) {
                    var data = JSON.parse(youtubeDataAPI.responseText)
                    createChannelHtml(data);

                } else {
                    console.log('Server error', youtubeDataAPI.status);
                }
            }
            youtubeDataAPI.onerror = function() {
                console.log('Connection error');
            }
            youtubeDataAPI.send();

            function createChannelHtml(channelData) {
                var channelString = '';

                channelString = '<img src="' + channelData.items[0].snippet.thumbnails.default.url + '" alt="' + channelData.items[0].snippet.title + '" width="100%" height="100%">';

                channelContainer.innerHTML = channelString;
            }
        }

        function getDefault() {

            var liveContainer = document.getElementById('live-container');
            var youtubeDataAPIDefaultEndPoint = 'https://www.googleapis.com/youtube/v3/search?part=id,snippet&channelId=UC8racR0Ko9HzKpIBAPvifKw&maxResults=4&order=date&type=video&key=' + apiKey + '';

            var youtubeDataAPI = new XMLHttpRequest();
            youtubeDataAPI.open('GET', youtubeDataAPIDefaultEndPoint );
            youtubeDataAPI.onload = function() {
                if (youtubeDataAPI.status >= 200 && youtubeDataAPI.status < 400) {
                    var data = JSON.parse(youtubeDataAPI.responseText)
                    createDefaultHtml(data.items);

                } else {
                    console.log('Server error', youtubeDataAPI.status);
                }
            }
            youtubeDataAPI.onerror = function() {
                console.log('Connection error');
            }
            youtubeDataAPI.send();

            function createDefaultHtml(defaultData) {
                var defaultString = '';
                for(var i=0; i<defaultData.length; i++) {
                    defaultString = '<div class="video-tag">' + '<span>Novo</span>' + '</div>'+
                                    '<iframe width="100%" height="280" src="https://www.youtube.com/embed/' + defaultData[0].id.videoId + '?autoplay=1" frameborder="0" encrypted-media" allowfullscreen></iframe>'+
                                    '<div class="iframe-text">'+
                                    '<a target="_blank" href="https://www.youtube.com/watch?v=' + defaultData[0].id.videoId + '">' + '<h4 class="ellipsis">' + defaultData[0].snippet.title + '</h4>' + '</a>' + 
                                    '<a target="_blank" href="https://www.youtube.com/watch?v=' + defaultData[0].id.videoId + '">Assistir no youtube	&rarr;</a>'+ 
                                    '</div>';
                }

                liveContainer.innerHTML = defaultString;
            }
        }

        function getLive() {
            var liveContainer = document.getElementById('live-container');
            var youtubeDataAPILiveEndPoint = 'https://www.googleapis.com/youtube/v3/search?part=id,snippet&channelId=UC8racR0Ko9HzKpIBAPvifKw&eventType=live&type=video&key=' + apiKey + '';

            var youtubeDataAPI = new XMLHttpRequest();
            youtubeDataAPI.open('GET', youtubeDataAPILiveEndPoint );
            youtubeDataAPI.onload = function() {
                if (youtubeDataAPI.status >= 200 && youtubeDataAPI.status < 400) {
                    var data = JSON.parse(youtubeDataAPI.responseText);
                    if (data.items.length == 0) {
                        getDefault();
                    } else {
                        createLiveHtml(data.items);
                    }


                } else {
                    console.log('Server error', youtubeDataAPI.status);
                }
            }
            youtubeDataAPI.onerror = function() {
                console.log('Connection error');
            }
            youtubeDataAPI.send();

            function createLiveHtml(liveData) {
                var liveString = '';
                for(var i=0; i<liveData.length; i++) {
                    liveString +=   '<div class="video-tag">' + '<div id="live-on-icon"><i class="fas fa-circle"></i></div>' + '<span>ao vivo</span>' + '</div>'+
                                    '<iframe width="100%" height="280" src="https://www.youtube.com/embed/' + liveData[i].id.videoId + '?autoplay=1" frameborder="0" encrypted-media" allowfullscreen></iframe>'+
                                    '<div class="iframe-text">'+
                                    '<a target="_blank" href="https://www.youtube.com/watch?v=' + liveData[i].id.videoId + '">' + '<h4 class="ellipsis">' + liveData[i].snippet.title + '</h4>' + '</a>' + 
                                    '<a target="_blank" href="https://www.youtube.com/watch?v=' + liveData[i].id.videoId + '">Assistir no youtube &rarr;</a>'+ 
                                    '</div>';
                }

                liveContainer.innerHTML = liveString;
            }
        }

        function getVideos() {

            var videosContainer = document.getElementById('videos-container');
            var youtubeDataAPIEndPoint = 'https://www.googleapis.com/youtube/v3/search?part=id,snippet&channelId=UC8racR0Ko9HzKpIBAPvifKw&maxResults=4&order=date&type=video&key=' + apiKey + '';

            var youtubeDataAPI = new XMLHttpRequest();
            youtubeDataAPI.open('GET', youtubeDataAPIEndPoint );
            youtubeDataAPI.onload = function() {
                if (youtubeDataAPI.status >= 200 && youtubeDataAPI.status < 400) {
                    var data = JSON.parse(youtubeDataAPI.responseText)
                    createVideosHtml(data.items);

                } else {
                    console.log('Server error', youtubeDataAPI.status);
                }
            }
            youtubeDataAPI.onerror = function() {
                console.log('Connection error');
            }
            youtubeDataAPI.send();

            function createVideosHtml(videosData) {
                var videosString = '';
                for(var i=0; i<videosData.length; i++) {
                    videosString += '<div class="col-12 col-md-6 col-lg-3">'+
                                    '<div class="iframe-card">'+
                                    '<iframe width="100%" height="150" src="https://www.youtube.com/embed/' + videosData[i].id.videoId + '" frameborder="0" encrypted-media" allowfullscreen></iframe>'+
                                    '<div class="iframe-text">'+
                                    '<a target="_blank" href="https://www.youtube.com/watch?v=' + videosData[i].id.videoId + '">' + '<h4 class="ellipsis">' + videosData[i].snippet.title + '</h4>' + '</a>' + 
                                    '<a target="_blank" href="https://www.youtube.com/watch?v=' + videosData[i].id.videoId + '">Assistir no youtube &rarr;</a>'+ 
                                    '</div>'+
                                    '</div>'+
                                    '</div>';
                }

                videosContainer.innerHTML = videosString;
            }
        }

        });
})(jQuery);