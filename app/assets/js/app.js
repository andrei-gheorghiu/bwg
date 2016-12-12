function l(m) { console.log(m); }


// Setup
var $d = $(document),
    $w = $(window),
    favourites = ['Mondays Orders', 'Tuesdays Orders', 'Impulse Buys', 'Christmas Stock'],
    hasScroller = false;


// Interactions
$d
//Ready

.ready(hhtOrders)


// Navbar
.on('click','.settings > a', toggleMenu)

// Filter Menu
.on('click', '.top li:not(.right) a', highlightActive)
.on('click', '.top li a.planogram', showPlanogram)
.on('click', 'a.showFull', showFull)
.on('click', '.dropdowns div > a', toggleDropdown)
.on('click', 'li.title > a', accordion)
.on('click', '.dropdowns div ul li a', filterA)
.on('click', '.resetFilter', resetFilter)
.on('click', '.applyFilter', applyFilter)

// Product Grid
.on('click', '.quantity button.down, .quantity button.up', updateQuantity)
.on('click', '.master > div:not(.view) > a', productOrder)
.on('click', '.grid .item', openItem)
.on('click', '.delete a', removeItem)
.on('click', '.toggleStockCard', toggleStockCard)

// Popup
.on('click', '#popup a.close', closePopup)
.on('click', 'a.toggleErrors', toggleErrors)

// Favourites List
.on('click', 'a.addFavourite', toggleFavs)
.on('submit', 'form.addList', addList)
.on('click', 'ul.favList a', addToList);
$w
.on('load resize', windowResized)
.trigger('resize');


// Functions

function closePopup(e) {
  e.preventDefault();
  $(this).parent().fadeOut('fast');
}

function toggleErrors(e) {
  e.preventDefault();
  if($('#popup div.errors').hasClass('hide')) {

    $('#popup div.errors').removeClass('hide');
    $(this).empty().text('Hide Errors');

  } else {
  
    $('#popup div.errors').addClass('hide');
    $(this).empty().text('See More');
  
  }

}

function hhtOrders() {
  
  setTimeout(function(){
  
    l('hht orders popup');
    $('#popup').fadeIn('fast');

  }, 500);

}


function toggleStockCard(e) {
  e.preventDefault();
  l('show stockcard');

  var thisCard = $(this).parent().parent().parent().next();
  l(thisCard);

  if(thisCard.hasClass('open')) {
    thisCard.removeClass('open');
  } else {
    thisCard.addClass('open');
  }
}



function openItem(e) {

  if($(e.target).is('.addFavourite, ul.favList a, .up, .down, input, .basket a, .delete a, .toggleStockCard')) {
    // l(e.target);
  } else {
    e.preventDefault();
    if($(this).hasClass('active')){
      $(this).removeClass('active');
    } else {
      $(this).addClass('active');
    }
  }

}


function removeItem() {
  
}


function applyFilter(){
  alert('Make Filter Go Now!');
}

function resetFilter(){
  resetDropdowns();
  $('.filter .top li:not(.right) a').removeClass('active');
  $('.filter .showFull').removeClass('open');
  $('.filter .full').addClass('hide');
}


function showPlanogram(){
  if($('div.planogram').hasClass('hide')){
    $('div.planogram').removeClass('hide');
  } else {
    $('div.planogram').addClass('hide');
  }
}


function productOrder(e) { 

  e.preventDefault();
  if($(this).hasClass('active')){
  
    if($(this).children().children().hasClass('down')){
      $(this).children().children().attr('class', 'up');
    } else {
      $(this).children().children().attr('class', 'down');
    }
  
  } else {

    $('.master > div > a').removeClass('active');
    $(this).addClass('active');

  }
}


function updateQuantity() {

  // Up Click
  if($(this).hasClass('up')) {
    var val = $(this).prev().val();
    $(this).prev().val(parseInt(val) + 1);

  // Down Click
  } else {
    var val = $(this).next().val();
    if(val > 0) {
      $(this).next().val(parseInt(val) - 1);
    }
  }

}


function toggleMenu(e) {
  e.preventDefault();
	dd = $(this).next();
	if(dd.hasClass('closed')) {
		dd.removeClass('closed');
	} else {
		dd.addClass('closed');
	}
}


function highlightActive(e) {
  e.preventDefault();
  if($(this).hasClass('active')){
    $(this).removeClass('active');
  } else {
    $('.top li:not(.right) a').removeClass('active');
    $(this).addClass('active');
  }
  resetDropdowns();
}


function accordion(e) {
  e.preventDefault();
  console.log('accordion');

  console.log($(this).parent());

  if($(this).parent().hasClass('active')) {
    $('li.active').removeClass('active');
  } else {
    $('li.active').removeClass('active');
    $(this).parent().addClass('active');
  }
 
}



function showFull(e) {
  e.preventDefault();
  console.log('showFull');
  if($('.full').hasClass('hide')){
    $(this).addClass('open');
    $('.full').removeClass('hide')
  } else {
    $(this).removeClass('open');
    $('.full').addClass('hide')  
  }
}


function toggleDropdown(e) {
  e.preventDefault();
  if($(this).next().hasClass('hide')) {
  	$(this).addClass('active');
    $(this).next().removeClass('hide');
  } else {
  	$(this).removeClass('active');
    $(this).next().addClass('hide');
  }
}

function filterA(e) {
  e.preventDefault();  
  var currentItem = $(this).text();  
  $(this).parent().parent().prev().empty().append(currentItem);
  $(this).parent().parent().addClass('hide');
  $(this).parent().parent().parent().next().removeClass('out');

}

function resetDropdowns() {
  $('.dropdowns > div a').removeClass('active');
  $('.dropdowns > div ul').addClass('hide');
  $('.dropdowns > div:first-child').find('> a').empty().text('Department');
  $('.dropdowns > div:nth-child(2)').addClass('out').find('> a').empty().text('Group');
  $('.dropdowns > div:nth-child(3)').addClass('out').find('> a').empty().text('Category');
}


function addList(e) {
  e.preventDefault();
  var val = $('input.list').val(),
      list = $(this).parent(),
      favButton = $(this).parent().prev();
  favourites.push(val);
  list.remove();
  favButton.after(makeList());
}

function toggleFavs(e) {
  e.preventDefault(); 
  $('ul.favList').remove();
  if($(this).hasClass('active')) {
    $(this).removeClass('active')
    $(this).next().remove();
  } else {
    $(this).addClass('active')
    $(this).after(makeList());
  }
}

function makeList() {
  var dd = '<ul class="favList">';
  for(i = 0; i < favourites.length; i++) {
     dd += '<li><a href="#">' + favourites[i] + '</a></li>';
  };
  dd += '<form class="addList">\n<input type="text" class="list" placeholder="Make New List" />\n<input type="submit" />\n</form>\n</ul>';
  return dd;
}

function addToList(e) {

  e.preventDefault();
  var thisItem = $(this).text(),
      list = $(this).parent().parent(),
      favButton = $(this).parent().parent().prev();
  
  console.log('added to ' + thisItem);
  
  list.remove();
  favButton.addClass('active');
  
}

function windowResized() {
  $w.width()<1e3?hasScroller&&($d.off("scroll").on("resize",windowResized),hasScroller=!1):hasScroller||($d.on("scroll",windowScroller)&&windowScroller(),hasScroller=!0);
}
function windowScroller(){
  $('aside').css({top:$(document).scrollTop()+'px'})
}