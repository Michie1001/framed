{{-- main dashboard --}}
.............
<!-- This would be the dashboard app
Sections include:
-A to-do 
-Weather forecast
-Day counter for my Year in Colors
-Calender date
-Music player
-A random muse photo from pinterest
-Clock
-News 
-Fun fact like Curiosity Stream -->

<!DOCTYPE html>
<html>
<head>
	<title>Framed</title>
</head>
<body>
	<div class="background">
		<div class="gridarea"> {{--dashboard grid--}}
            <figure class="gridarea__item gridarea__item-1">
                <img src="img/gal-1.jpeg" alt="Gridarea image" class="gridarea__img">
            </figure>
            <figure class="gridarea__item gridarea__item-2">
                <img src="img/gal-2.jpeg" alt="Gridarea image" class="gridarea__img">
            </figure>
            <figure class="gridarea__item gridarea__item-3">
                <img src="img/gal-3.jpeg" alt="Gridarea image" class="gridarea__img">
            </figure>
            <figure class="gridarea__item gridarea__item-4">
                <img src="img/gal-4.jpeg" alt="Gridarea image" class="gridarea__img">
            </figure>
            <figure class="gridarea__item gridarea__item-5">
                <img src="img/gal-5.jpeg" alt="Gridarea image" class="gridarea__img">
            </figure>
            <figure class="gridarea__item gridarea__item-6">
                <img src="img/gal-6.jpeg" alt="Gridarea image" class="gridarea__img">
            </figure>
            <figure class="gridarea__item gridarea__item-7">
                <img src="img/gal-7.jpeg" alt="Gridarea image" class="gridarea__img">
            </figure>
            <figure class="gridarea__item gridarea__item-8">
                <img src="img/gal-8.jpeg" alt="Gridarea image" class="gridarea__img">
            </figure>            
        </div>
	</div>
</body>
</html>
{{-- 
.gallery{
	background-color: $color-grey-light-1;
	grid-column: full-start / full-end;

	display: grid;
	grid-template-columns: repeat(8, 1fr);
	grid-template-rows: repeat(7, 5vw); 
	grid-gap: 1.5rem;
	padding: 1.5rem;

	&__item{
		&-1{
			grid-area: 1 / 1 / 3 / 3;
		}
		&-2{
			grid-area: 1 / 3 / 4 / 6;
		}
		&-3{
			grid-area: 1 / 6 / 3 / 7;
		}
		&-4{
			grid-area: 1 / 7 / 3 / 9;
		}
		&-5{
			grid-area: 3 / 1 / 6 / 3;
		}
		&-6{
			grid-area: 4 / 3 / 6 / 5;
		}
		&-7{
			grid-area: 4 / 5 / 5 / 6;
		}
		&-8{
			grid-area: 3 / 6 / 5 / 8;
		}
		&-9{
			grid-area: 3 / 8 / 6 / 9;
		}
		&-10{
			grid-area: 6 / 1 / 8 / 2;
		}
		&-11{
			grid-area: 6 / 2 / 8 / 4;
		}
		&-12{
			grid-area: 6 / 4 / 8 / 5;
		}
		&-13{
			grid-area: 5 / 5 / 8 / 8;
		}
		&-14{
			grid-area: 6 / 8 / 8 / 9;
		}
	}

	&__img {
		width: 100%;
		height: 100%;
		object-fit: cover;
		display: block;
	}
} --}}