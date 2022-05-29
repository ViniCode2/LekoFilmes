var elms = document.getElementsByClassName( 'splide' );


for ( var i = 0; i < elms.length; i++ ) {
new Splide( elms[ 0 ], {
    type   : 'loop',
    perPage: 5,
    perMove: 1,

}).mount();
new Splide( elms[ 1 ], {
    type   : 'loop',
    perPage: 5,
    perMove: 1,
}).mount();
new Splide( elms[ 2 ], {
    type   : 'loop',
    perPage: 5,
    perMove: 1,
}).mount();
}