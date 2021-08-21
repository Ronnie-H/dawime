<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">

/**Date on Top styling**/
 .thumbnail {
  background: #000000;
    overflow: hidden;
}
.thumbnail .date {
  position: absolute;
  top: 20px;
  right: 20px;

  z-index: 1;
  background: #000000;
  width: 55px;
  height: 55px;
  padding: 12.5px 0;
  -webkit-border-radius: 100%;
  -moz-border-radius: 100%;
  border-radius: 100%;
  color: #FFFFFF;
  font-weight: 700;
  text-align: center;
  -webkti-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
.thumbnail .date .day {
  font-size: 18px;
}
.thumbnail .date .month {
  font-size: 12px;
  text-transform: uppercase;
}


/**The new boses**/

.content-wrapper {
  margin: 0 auto;
  max-width: 1200px;
  display: flex;
  flex-flow: row wrap;
  justify-content: center;
  padding: 1rem;
  

}

.news-card {
  border: 0px solid aqua;
  margin: 0.5rem;
  position: relative;
  height: 12rem;
  overflow: hidden;
  border-radius: 0.5rem;
  flex: 1;
  min-width: 250px;
  min-height: 400px;
  box-shadow: 0 0 1rem rgba(0, 0, 0, 0.5);
  -webkit-backface-visibility: hidden;
  -moz-backface-visibility: hidden;
  -webkit-transform: translate3d(0, 0, 0);
  -moz-transform: translate3d(0, 0, 0);
}

@media (min-width: 900px) {

.news-card {
    height: 20rem
}
  }

.news-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0) linear-gradient(to bottom, rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.7) 80%);;
      z-index: 0;
    }

.news-card__card-link {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 1;
/*     background: rgba(255,0,0,.5); */
  }

.news-card__image {
    width: 100%;
    height: 100%;
    display: block;
    object-fit: fill;
    transition: transform 3s ease;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    position: relative;
    z-index: -1;
  }

.news-card__text-wrapper {
    position: absolute;
    bottom: 0rem;
    padding: 1rem;
    color: white;
/*     background-color: rgba(0, 0, 0, 0.4); */
    transition: background-color 1.5s ease;
  }

.news-card__title {
    transition: color 1s ease;
    margin-bottom: .5rem;
  }

.news-card__post-date {
    font-size: .7rem;
    margin-bottom: .5rem;
    color: #CCC;
  }

.news-card__details-wrapper {
    max-height: 0;
    opacity: 0;
    transition: max-height 1.5s ease, opacity 1s ease;
  }

@media (min-width: 900px) {
    .news-card:hover .news-card__details-wrapper {
      max-height: 20rem;
      opacity: 1;
    }
    .news-card:hover .news-card__text-wrapper {
      background-color: rgba(0, 0, 0, 0.6);
    }
    .news-card:hover .news-card__title {
      color: yellow;
    }
    .news-card:hover .news-card__image {
      transform: scale(1.2);
      z-index: -1;
    }
  }

.news-card__excerpt {
    font-weight: 300;
  }

.news-card__read-more {
    background: black;
    color: #bbb;
    display: block;
    padding: 0.4rem 0.6rem;
    border-radius: 0.3rem;
    margin-top: 1rem;
    border: 1px solid #444;
    font-size: 0.8rem;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    text-decoration: none;
    width: 7rem;
    margin-left: auto;
    position: relative;
    z-index: 5;
  }

.news-card__read-more i {
      position: relative;
      left: 0.2rem;
      color: #888;
      transition: left 0.5s ease, color 0.6s ease;
      -webkit-backface-visibility: hidden;
      backface-visibility: hidden;
    }

.news-card__read-more:hover i {
      left: 0.5rem;
      color: yellow;
    }
	</style>
</head>
<body>


<div class="content-wrapper">
  

  
  <div class="news-card">
    <a href="#" class="news-card__card-link"></a>
    <img src="img/ab.jpg" alt="" class="news-card__image">
    <div class="thumbnail">
        <div class="date">
          <div class="day">31</div>
          <div class="month">oct</div>
        </div>
      </div> 
    <div class="news-card__text-wrapper">
      <h2 class="news-card__title">Entry : Ksh650 </h2>
            <div class="news-card__details-wrapper">
        <p class="news-card__excerpt">
          Venue : PentHouse View. Park Towers. 20th Floor </p>
       <p class="news-card__excerpt">
          Time : 2.00p.m - 8.00p.m  </p>

        <a href="#" class="news-card__read-more">COVID RULES TO BE ADHERED <i class="fas fa-long-arrow-alt-right"></i></a>
      </div>
    </div>
  </div>


  <div class="news-card">
    <a href="#" class="news-card__card-link"></a>
    <img src="img/ab5.jpg" alt="" class="news-card__image">
    <div class="thumbnail">
        <div class="date">
          <div class="day">10</div>
          <div class="month">Feb</div>
        </div>
      </div> 
    <div class="news-card__text-wrapper">
      <h2 class="news-card__title">Entry Free</h2>
            <div class="news-card__details-wrapper">
        <p class="news-card__excerpt">
          Venue : Oysters & More. Village Market. New Wing  </p>
         <p class="news-card__excerpt">
          Time : 4.00p.m - 8.00p.m  </p>

        <a href="#" class="news-card__read-more">COVID RULES TO BE ADHERED <i class="fas fa-long-arrow-alt-right"></i></a>
      </div>
    </div>
  </div>


  <div class="news-card">
    <a href="#" class="news-card__card-link"></a>
    <img src="img/ab6.png" alt="" class="news-card__image">
    <div class="thumbnail">
        <div class="date">
          <div class="day">23</div>
          <div class="month">Jan</div>
        </div>
      </div> 
    <div class="news-card__text-wrapper">
      <h2 class="news-card__title">Entry Free</h2>
            <div class="news-card__details-wrapper">
        <p class="news-card__excerpt">
          Venue : Jkuat CLB 002 . Near Block B. </p>
        <p class="news-card__excerpt">
          Time : 2.00p.m - 8.00p.m  </p>

        <a href="#" class="news-card__read-more">COVID RULES TO BE ADHERED <i class="fas fa-long-arrow-alt-right"></i></a>
      </div>
    </div>
  </div>


  <div class="news-card">
    <a href="#" class="news-card__card-link"></a>
    <img src="img/ab7.jpg" alt="" class="news-card__image">
    <div class="thumbnail">
        <div class="date">
          <div class="day">16</div>
          <div class="month">nov</div>
        </div>
      </div> 
    <div class="news-card__text-wrapper">
      <h2 class="news-card__title">Entry Free</h2>
            <div class="news-card__details-wrapper">
        <p class="news-card__excerpt">
          Venue : OML 4.In Kenyatta University</p>
       <p class="news-card__excerpt">
          Time : 2.00p.m - 8.00p.m  </p>

        <a href="#" class="news-card__read-more">COVID RULES TO BE ADHERED <i class="fas fa-long-arrow-alt-right"></i></a>
      </div>
    </div>
  </div>


  <div class="news-card">
    <a href="#" class="news-card__card-link"></a>
    <img src="img/ab9.jpg" alt="" class="news-card__image">
    <div class="thumbnail">
        <div class="date">
          <div class="day">19</div>
          <div class="month">sep</div>
        </div>
      </div> 
    <div class="news-card__text-wrapper">
      <h2 class="news-card__title">Entry Free</h2>
            <div class="news-card__details-wrapper">
        <p class="news-card__excerpt">
          Venue : Ambwere Towers. 4th floor. Kakamega. </p>
       <p class="news-card__excerpt">
          Time : 3.00p.m onwards </p>

        <a href="#" class="news-card__read-more">COVID RULES TO BE ADHERED <i class="fas fa-long-arrow-alt-right"></i></a>
      </div>
    </div>
  </div>


  <div class="news-card">
    <a href="#" class="news-card__card-link"></a>
    <img src="img/ab15.jpg" alt="" class="news-card__image">
    <div class="thumbnail">
        <div class="date">
          <div class="day">Every</div>
          <div class="month">Sato</div>
        </div>
      </div> 
    <div class="news-card__text-wrapper">
      <h2 class="news-card__title">Entry Free</h2>
            <div class="news-card__details-wrapper">
        <p class="news-card__excerpt">
          Venue : Kahaawa Sukari. Work it gym.   </p>
       <p class="news-card__excerpt">
          Time : 11.00a.m - 1.00p.m  </p>

        <a href="#" class="news-card__read-more">COVID RULES TO BE ADHERED <i class="fas fa-long-arrow-alt-right"></i></a>
      </div>
    </div>
  </div>

  <div class="news-card">
    <a href="#" class="news-card__card-link"></a>
    <img src= "img/ab3.jpg" alt="" class="news-card__image">
    <div class="thumbnail">
        <div class="date">
          <div class="day">Every</div>
          <div class="month">Wed</div>
        </div>
      </div> 
    <div class="news-card__text-wrapper">
      <h2 class="news-card__title"> Entry Free</h2>
            <div class="news-card__details-wrapper">
        <p class="news-card__excerpt">
           Venue : Mawimbi Seafood restaurant. Kijabe Street.   </p>
       <p class="news-card__excerpt">
          Time : 5.30p.m onwards                      
        </p>
        <a href="#" class="news-card__read-more">COVID RULES TO BE ADHERED <i class="fas fa-long-arrow-alt-right"></i></a>
      </div>
    </div>
  </div>

  <div class="news-card">
    <a href="#" class="news-card__card-link"></a>
    <img src="img/ab4.jpg" alt="" class="news-card__image">
    <div class="thumbnail">
        <div class="date">
          <div class="day">13</div>
          <div class="month">feb</div>
        </div>
      </div> 
    <div class="news-card__text-wrapper">
      <h2 class="news-card__title">Entry Free</h2>
          <div class="news-card__details-wrapper">
        <p class="news-card__excerpt">
          Venue : Two Grape wines & friends. George Padmore road. Kilimani.</p>
       <p class="news-card__excerpt">
          Time : 3.00 p.m - 8.00 p.m.
        </p>
        <a href="#" class="news-card__read-more">COVID RULES TO BE ADHERED <i class="fas fa-long-arrow-alt-right"></i></a>
      </div>
    </div>
  </div>
</div>




</body>
</html>