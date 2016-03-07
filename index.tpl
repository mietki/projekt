{include file='func.tpl'}
{include file='departures/style_1.tpl'}
{include file='departures/style_2.tpl'}
{include file='departures/style_3.tpl'}
{include file='departures/style_4.tpl'}
<!doctype html>
<html>
    <head>
        <title>rJazdy</title>
        <link rel="stylesheet" href="{baseUrl}/css/bootstrap.css">
        <link rel="stylesheet" href="{baseUrl}/css/font-awesome.min.css">
        <link rel="stylesheet" href="{baseUrl}/css/main.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
    </head>
    
    <body>
       
        {include "main/menu.tpl"}
        
        <div class="container">
        {block "content"}
        
        {/block}
        
        <script>
            var URL = '{baseUrl}';
        </script>
        <script src="{baseUrl}/js/lib/jquery.js"></script>
        <script src="{baseUrl}/js/lib/js.cookie-2.0.3.min.js"></script>
        <script src="{baseUrl}/js/lib/bootstrap.js"></script>
        <script src="{baseUrl}/js/main.js"></script>
        
        {block "scripts"}
            
        {/block}
        
            <footer id="footer" class="hidden-print">
                &copy; 2015 Patryk Wychowaniec<br>
                Stylizacje: <a href="https://github.com/ksiazkowicz">Maciej Janiszewski</a>

                <div class="alert alert-warning alert-dismissible alert-cookies" role="alert">
                  <button type="button" class="close close-cookies" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  {$lang.user_cookies}
                </div>
            </footer>
        
        </div>

        <script>
            $(document).ready(function() {
                if(Cookies.get('cookie-msg') == 'true') {
                    $('.alert-cookies').hide();
                }

                $('.close-cookies').on('click', function() {
                    Cookies.set('cookie-msg', 'true');
                });
            });
        </script>
        
        {include file='common/_lines_modal.tpl'}
        {include file='common/_settings_modal.tpl'}
    </body>
</html>