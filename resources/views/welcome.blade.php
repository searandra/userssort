<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <style>
            html {
              font-family: RobotoDraft, 'Helvetica Neue', Helvetica, Arial;
            }

            body {
              background: #3A3A4D;
              padding: 25px;
            }

            *, *:before, *:after {
              box-sizing: border-box;
            }

            h1 {
              color: #efefef;
              font-weight: normal;
              font-weight: 300;
              margin-bottom: 30px;
            }
            h1 a {
                color: #efefef;
                border-bottom: 2px solid #efefef;
                text-decoration: none;
                padding-bottom: 3px;
            }
            h1 a:hover {
                  color: yellowgreen;
                  border-color: yellowgreen;
            }
            
            button {
              padding: 12px 30px;
              box-shadow: none;
              border: none;
              color: #efefef;
              cursor: pointer;
              background-color: rgba(0, 0, 0, 0.3);
            }
            button:hover {
                background-color: rgba(0, 0, 0, 0.35);
                color: yellowgreen;
            }

            button:focus {
                outline: none;
            }
            
            #list {
              background-color: rgba(0, 0, 0, 0.2);
              width: 250px;
              width: 90%;
              width: 0;
              position: relative;
              display: block;
              margin-top: 50px;
              padding: 20px;
            }

            .tile {
              display: block;
              position: absolute;
              background-color: yellowgreen;
              color: #3A3A4D;
              padding: 5px;
              font-weight: bold;
            }

            .layout {
              color: #efefef;
              margin-bottom: 15px;
            }  
            .layout label {
                margin-right: 15px;
                cursor: pointer;
            }
            .layout label:hover {
                  color: yellowgreen;
            }
            .layout input {
                margin-right: 3px;
            }
            .tile .image {
                width: 42%;
            }
            .tile .image img{
                width: 100%;
            }
            .tile{
            }
            .user-details {
                background-color: yellowgreen;
                display: inline-flex;
                transition: 1s ease;
            }
            .user-details:hover{
                /*-webkit-transform: scale(1.2);
                -ms-transform: scale(1.2);
                transform: scale(1.2);
                transition: 1s ease;*/
                z-index: 999999;
                padding-bottom: 10px; 
            }
            .modal.show .modal-dialog {
                max-width: 90%;
            }
            .text-center {
                text-align: center!important;
                width: 100%;
            }
            .dashboard_content {
                background: #F5F5FB;
                display: block;
                position: relative;
                padding: 3rem 1rem;
                height: 500px;
                width: 100%;
                border-radius: 30px;
            }
            .coverImg img {
                display: flex;
                position: relative;
                /* min-height: 415px; */
                height: auto;
                border-radius: 20px;
                margin-bottom: 30px;
                align-items: flex-end;
            }
            .profile_image_section {
                position: relative;
                height: auto;
                border-radius: 20px;
                margin-bottom: 30px;
                align-items: flex-end;
            }
            .profile_image_section .profile_picture {
                width: 150px;
                height: 150px;
                display: block;
                position: absolute;
                right: 80px;
                bottom: 170px;
                top: 30%;
            }
            .profile_image_section .profile_picture img {
                width: 100%;
                border-radius: 50%;
            }
            .profile_image_section .profile_content {
                display: flex;
                flex-wrap: wrap;
                flex-direction: row;
                position: relative;
                background: #fff;
                padding: 20px;
                width: 100%;
                min-height: 140px;
                height: 140px;
                border-bottom-left-radius: 18px;
                border-bottom-right-radius: 18px;
                align-items: center;
                justify-content: flex-start;
            }
            .profile_box {
                display: flex;
                flex-wrap: wrap;
                flex-direction: row;
                align-items: center;
                width: 50%;
            }
            .profile_box img{
                width: 100px;
            }
        </style>
    </head>
    <body>
        <h1>Users</h1>
        
        <div id="list">
        </div>


<div class="modal" tabindex="-1" role="dialog" id="user-details">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title text-center">User Information</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <section class="page_wrapper dashboard-layout" id="dashboard">
            <div class="container-fluid">
                <div class="row">
                    <!-- Dashboard content starts here -->
                    <div class="col-md-12 col-12 change-width" id="user-profile-public">
                        <div class="dashboard_content" id="dashboard-content">
                            <div class="profile_inner-content-dashboard">
                                <div class="profile-view-mobile">
                                    <div class="profile_image_section">
                                        <div class="coverImg">
                                
                                            <div class="image-upload">
                                                <label for="input_file" class="img-wrapper" style="width: 100%;">
                                                <img style="width: 100%;height: 240px;" src="images/profile-bg.png" alt="connection image">
                                                </label>
                                                
                                            </div>
                                        </div>
                                        <div class="profile_picture">  
                                            <img src="images/default.png" alt="connection image">
                                        </div>


                                        <div class="profile_content">
                                            
                                            <div class="profile_box">
                                                <div class="profile_img">
                                                    <img src="/images/userdefault.png" alt="">
                                                </div>
                                                <div class="profile_single_content">
                                                    <h3 id="user-name"></h3>
                                                </div>
                                            </div>
                                            <div class="profile_box">
                                                <div class="profile_img">
                                                    <img src="/images/phone.jpeg" alt="" style="width: 85px;">
                                                </div>
                                                <div class="profile_single_content">
                                                    <h3 id="user-phone-number">0</h3>
                                                </div>
                                            </div>
                                        
                                        </div>


                                    </div>
                                </div>
               
                            </div>
                        </div>
                    </div>
                    <!-- Dashboard content ends here -->
                </div>
            </div>
            <!-- End of Endorsement form Modal -->
        </section>
      </div>
    </div>
  </div>
</div>



<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/utils/Draggable.min.js"></script>       
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script type="text/javascript">
           
     
 $(document).on('click','.user-details', function(){
    
    $('#user-name').text($(this).attr('name'));
    $('#user-phone-number').text($(this).attr('phone'));
    $('#user-details').modal('toggle');
 });


// GRID OPTIONS
var rowSize   = 100;
var colSize   = 100;
var gutter    = 7;     // Spacing between tiles
var numTiles  = 0;    // Number of tiles to initially populate the grid with
var fixedSize = false; // When true, each tile's colspan will be fixed to 1
var oneColumn = false; // When true, grid will only have 1 column and tiles have fixed colspan of 1
var threshold = "50%"; // This is amount of overlap between tiles needed to detect a collision

var $add  = $("#add");
var $list = $("#list");
var $mode = $("input[name='layout']");

// Live node list of tiles
var tiles  = $list[0].getElementsByClassName("tile");
var label  = 1;
var zIndex = 1000;

var startWidth  = "100%";
var startSize   = colSize;
var singleWidth = colSize * 3;

var colCount   = null;
var rowCount   = null;
var gutterStep = null;

var shadow1 = "0 1px 3px  0 rgba(0, 0, 0, 0.5), 0 1px 2px 0 rgba(0, 0, 0, 0.6)";
var shadow2 = "0 6px 10px 0 rgba(0, 0, 0, 0.3), 0 2px 2px 0 rgba(0, 0, 0, 0.2)";

$(window).resize(resize);
$add.click(createTile);
$mode.change(init);

init();

// ========================================================================
//  INIT
// ========================================================================
function init() {

    var width = startWidth;

    // This value is defined when this function 
    // is fired by a radio button change event
    switch (this.value) {

        case "mixed":
            fixedSize = false;
            oneColumn = false;
            colSize   = startSize;
            break;

        case "fixed":
            fixedSize = true;
            oneColumn = false;
            colSize   = startSize;
            break;

        case "column":
            fixedSize = false;
            oneColumn = true;
            width     = singleWidth;
            colSize   = singleWidth;
            break;
    }

    // For images demo
    //window.stop();

    $(".tile").each(function() {
        Draggable.get(this).kill();
        $(this).remove();
    });
    var userTiles = document.getElementsByClassName('tile');

    for (var i = userTiles.length - 1; i >= 0; i--) {
        createTile(userTiles[i]);
    }

    console.log(userTiles);
    TweenLite.to($list, 0.2, { width: width });
    TweenLite.delayedCall(0.25, populateBoard);

    function populateBoard() {

        label = 1;
        resize();

        for (var i = 0; i < numTiles; i++) {
            createTile();
        }
    }
}


// ========================================================================
//  RESIZE
// ========================================================================
function resize() {

    colCount   = oneColumn ? 1 : Math.floor($list.outerWidth() / (colSize + gutter));
    gutterStep = colCount == 1 ? gutter : (gutter * (colCount - 1) / colCount);
    rowCount   = 0;

    layoutInvalidated();
}


// ========================================================================
//  CHANGE POSITION
// ========================================================================
function changePosition(from, to, rowToUpdate) {
    console.log(from, to, rowToUpdate);
    var $tiles = $(".tile");
    var insert = from > to ? "insertBefore" : "insertAfter";

    // Change DOM positions
    $tiles.eq(from)[insert]($tiles.eq(to));

    layoutInvalidated(rowToUpdate);
}

// ========================================================================
//  CREATE TILE
// ========================================================================
function createTile(id='0' ,name='',image='',phoneNumber='') {

    var colspan = 2;
    var html = '<div class="user-details" name="'+name+'" phone="'+phoneNumber+'"><div class="image"> <img src="images/default.png"></div>'+
                '<div class="details-info"><p>'+name+'</p>'+
                '<p>'+phoneNumber+'</p></div></div>';

    var element = $("<div></div>").addClass("tile").attr('userid',id).html(html);
    var lastX   = 0;
    console.log(element, label, colspan);
    Draggable.create(element, {
        onDrag      : onDrag,
        onPress     : onPress,
        onRelease   : onRelease,
        zIndexBoost : false
    });

    // NOTE: Leave rowspan set to 1 because this demo 
    // doesn't calculate different row heights
    var tile = {
        user : id,
        col        : null,
        colspan    : colspan,
        height     : 0,
        inBounds   : true,
        index      : null,
        isDragging : false,
        lastIndex  : null,
        newTile    : true,
        positioned : false,
        row        : null,
        rowspan    : 1, 
        width      : 0,
        x          : 0,
        y          : 0
    };

    // Add tile properties to our element for quick lookup
    element[0].tile = tile;

    $list.append(element);
    layoutInvalidated();

    function onPress() {

        lastX = this.x;
        tile.isDragging = true;
        tile.lastIndex  = tile.index;

        TweenLite.to(element, 0.2, {
            autoAlpha : 0.75,
            boxShadow : shadow2,
            scale     : 0.95,
            zIndex    : "+=1000"
        });
    }

    function onDrag() {

        // Move to end of list if not in bounds
        if (!this.hitTest($list, 0)) {
            tile.inBounds = false;
            changePosition(tile.index, tiles.length - 1);
            return;
        }

        tile.inBounds = true;

        for (var i = 0; i < tiles.length; i++) {

            // Row to update is used for a partial layout update
            // Shift left/right checks if the tile is being dragged 
            // towards the the tile it is testing
            var testTile    = tiles[i].tile;
            var onSameRow   = (tile.row === testTile.row);
            var rowToUpdate = onSameRow ? tile.row : -1;
            var shiftLeft   = onSameRow ? (this.x < lastX && tile.index > i) : true;
            var shiftRight  = onSameRow ? (this.x > lastX && tile.index < i) : true;
            var validMove   = (testTile.positioned && (shiftLeft || shiftRight));

            if (this.hitTest(tiles[i], threshold) && validMove) {
                changePosition(tile.index, i, rowToUpdate);
                break;
            }
        }

        lastX = this.x;
    }

    function onRelease() {

        // Move tile back to last position if released out of bounds
        this.hitTest($list, 0)
            ? layoutInvalidated(-1)
        : changePosition(tile.index, tile.lastIndex);

        TweenLite.to(element, 0.2, {
            autoAlpha : 1,
            boxShadow: shadow1,
            scale     : 1,
            x         : tile.x,
            y         : tile.y,
            zIndex    : ++zIndex
        });

        tile.isDragging = false;
    }
}

// ========================================================================
//  LAYOUT INVALIDATED
// ========================================================================
function layoutInvalidated(rowToUpdate) {

    var timeline = new TimelineMax();
    var partialLayout = (rowToUpdate > -1);

    var height = 0;
    var col    = 0;
    var row    = 0;
    var time   = 0.35;
    tile_pos = [];

    $(".tile").each(function(index, element) {

        var tile    = this.tile;
        var oldRow  = tile.row;
        var oldCol  = tile.col;
        var newTile = tile.newTile;

        // PARTIAL LAYOUT: This condition can only occur while a tile is being 
        // dragged. The purpose of this is to only swap positions within a row, 
        // which will prevent a tile from jumping to another row if a space
        // is available. Without this, a large tile in column 0 may appear 
        // to be stuck if hit by a smaller tile, and if there is space in the 
        // row above for the smaller tile. When the user stops dragging the 
        // tile, a full layout update will happen, allowing tiles to move to
        // available spaces in rows above them.
        if (partialLayout) {
            row = tile.row;
            if (tile.row !== rowToUpdate) return;
        }

        // Update trackers when colCount is exceeded 
        if (col + tile.colspan > colCount) {
            col = 0; row++;
        }

        $.extend(tile, {
            col    : col,
            row    : row,
            index  : index,
            x      : col * gutterStep + (col * colSize),
            y      : row * gutterStep + (row * rowSize),
            width  : tile.colspan * colSize + ((tile.colspan - 1) * gutterStep),
            height : tile.rowspan * rowSize
        });

        col += tile.colspan;

        // If the tile being dragged is in bounds, set a new
        // last index in case it goes out of bounds
        if (tile.isDragging && tile.inBounds) {
            tile.lastIndex = index;
        }

        if (newTile) {

            // Clear the new tile flag
            tile.newTile = false;

            var from = {
                autoAlpha : 0,
                boxShadow : shadow1,
                height    : tile.height,
                scale     : 0,
                width     : tile.width
            };

            var to = {
                autoAlpha : 1,
                scale     : 1,
                zIndex    : zIndex
            }

            timeline.fromTo(element, time, from, to, "reflow");
        }

        // Don't animate the tile that is being dragged and
        // only animate the tiles that have changes
        if (!tile.isDragging && (oldRow !== tile.row || oldCol !== tile.col)) {

            var duration = newTile ? 0 : time;

            // Boost the z-index for tiles that will travel over 
            // another tile due to a row change
            if (oldRow !== tile.row) {
                timeline.set(element, { zIndex: ++zIndex }, "reflow");
            }

            timeline.to(element, duration, {
                x : tile.x,
                y : tile.y,
                onComplete : function() { tile.positioned = true; },
                onStart    : function() { tile.positioned = false; }
            }, "reflow");
        }
        var userId = $(this).attr('userid');
        var this_ = this;

        setTimeout(function(){
            var position = $(this_).position() ;
            tile_pos[userId] = position;
        },500);
        // tile_pos[userId]['x'] = position.left;
        // tile_pos[userId]['y'] = position.top;
    });

    if(typeof rowToUpdate != 'undefined'){
        console.log(tile_pos);
        var token = $('meta[name="csrf-token"').attr('content');
        setTimeout(function(){
            $.ajax({
                method:'post',
                url: "updateuserorder",
                data:{tile_pos:tile_pos, _token:token},
            }).done(function() {
              
            });
        },1000);
    }else{
        console.log('dras');
    }

    if (!row) rowCount = 1;

    // If the row count has changed, change the height of the container
    if (row !== rowCount) {
        rowCount = row;
        height   = rowCount * gutterStep + (++row * rowSize) +45;
        timeline.to($list, 0.2, { height: height }, "reflow");
    }
}



        </script>

    </body>
</html>
 @foreach($users as $user)
                <script type="text/javascript">
                    createTile('{{@$user["id"]}}','{{@$user["name"]}}', '{{@$user["image"]}}', '{{@$user["phone_number"]}}')
                </script>
            @endforeach