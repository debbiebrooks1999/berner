<?php session_start();?>
<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <title>Products</title>
    <meta content="" name="description"><?php include 'includes/head.php'; ?>
</head>
<body>
    <?php include 'includes/header.php'; ?>
    <div class="container">
        <div class="breadcrumb">
            <div>
                HOME &nbsp;
            </div>
            <div class="group"></div>
            <div class="subGroup"></div>
        </div>
        <div align="center" class="content">
            <!--<div class="header">-->
                <div class="side-col">
                    <h1 class="group">BROCHURES</h1>
                    <ul class="menuItems">
                        <!--     <li><span>&nbsp;>&nbsp;</span>sub items</li>   

          <li><span>&nbsp;>&nbsp;</span>sub items</li>    -->
                    </ul>
                </div> <!-- side-col -->
                <div class="main-col">
                    <h2 class="group">BROCHURES</h2><img class="groupImage"
                    src="images/group.jpg">
                    <p class="red">Select a subgroup:</p>
                    <ul class="groupItems">
                        <!--
            <li>sub items</li>
            <li>sub items</li>  -->
                    </ul>
                </div> <!-- main-col -->
            <!--</div> <!-- header -->
        </div> <!-- content -->
        <!-- <div class=results></div>  -->
    </div> <!-- container -->
    
    <div class="clearfix"></div>
		
		<?php include 'includes/footer.php'; ?>
    
    <script src="scripts/c35baf9e.vendor.js">
    </script> 
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
     
    <script>
                (function(b, o, i, l, e, r) {
                    b.GoogleAnalyticsObject = l;
                    b[l] || (b[l] =
                        function() {
                            (b[l].q = b[l].q || []).push(arguments)
                        });
                    b[l].l = +new Date;
                    e = o.createElement(i);
                    r = o.getElementsByTagName(i)[0];
                    e.src = '//www.google-analytics.com/analytics.js';
                    r.parentNode.insertBefore(e, r)
                }(window, document, 'script', 'ga'));
                ga('create', 'UA-XXXXX-X');
                ga('send', 'pageview');
    </script> 
    <script type="text/javascript">
                /*
                    $('.menuItems li').on('click', function(){

                      if($(this).hasClass('sub')){
                          return;
                      }else{
                        groupCode = $(this).html();
                        location.href = 'products.html?group='+groupCode;

                      }

                      })
                */

                $(document).ready(function() {

                    var groupCode = getParameterByName('group');
                    $('.groupImage').attr('src', "productImages/group/" + decodeURI(groupCode) + ".jpg")
                    $('.group').html(groupCode);

                    // Store
                    localStorage.setItem("group", groupCode);
                    // Retrieve
                    document.querySelector(".group").innerHTML = " / " + localStorage.getItem("group");

                    var element = $('.menuItems');
                    var element2 = $('.groupItems');
                    $('li').filter(':contains("' + groupCode + '")').addClass('active');

                    var strSubGroup;
                    var content;
                    var content2;

                    $.ajax({

                        url: 'api.php?group=' + groupCode, //the script to call to get data          

                        dataType: 'json', //data format      
                        success: function(data) {

                            connect(data);

                        }
                    });

                    // <li><span>&nbsp;>&nbsp;<\/span>sub items<\/li>   

                    function connect(data) {
                        $(data).each(function(key, value) {
                            if (value.description != undefined)
                                content = content + "<li ><a href='list_prod.php?item=" + value.code + "&desc=" + value.description + "'><span>&nbsp;>&nbsp;<\/span>" + value.description + "<\/a><\/li>";
                            content2 = content2 + "<li ><a href='list_prod.php?item=" + value.code + "&desc=" + value.description + "'>" + value.description + "<\/a><\/li>";

                        });
                        var editedContent = content.replace("undefined", "");
                        var editedContent2 = content2.replace("undefined", "");
                        //  strSubGroup = "<ul>" + editedContent + "<\/ul>";
                        //  strSubGroup = "<ul>" + editedContent + "<\/ul>";

                        //  var element = $('.menuItems');
                        //   var element2 = $('.groupItems');

                        $(editedContent).appendTo(element);
                        $(editedContent2).appendTo(element2);

                        localStorage.setItem("editedContent", editedContent);
                        localStorage.setItem("editedContent2", editedContent2);

                        //   console.log('strSubGroup' + strSubGroup);
                    }

                    function disconnect() {
                        //where an li has children - remove them
                    }

                    function getParameterByName(name, url) {
                        if (!url) url = window.location.href;
                        name = name.replace(/[\[\]]/g, "\\$&");
                        var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
                            results = regex.exec(url);
                        if (!results) return null;
                        if (!results[2]) return '';
                        return decodeURIComponent(results[2].replace(/\+/g, " "));
                    }

                    function htmlDecode(value) {
                        return $('<div/>').html(value).text();
                    }

                });
    </script> 
</body>
</html>