<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name')}} - Full Stack Coding Challege - Warrake Hussein</title>

<style>
/* Font */
@import url('https://fonts.googleapis.com/css?family=Quicksand:400,700');

/* Design */
*,
*::before,
*::after {
  box-sizing: border-box;
}

html {
  background-color: #ecf9ff;
}

body {
  color: #272727;
  font-family: 'Quicksand', serif;
  font-style: normal;
  font-weight: 400;
  letter-spacing: 0;
  padding: 1rem;
}

.main{
  max-width: 1200px;
  margin: 0 auto;
}

h1 {
    font-size: 24px;
    font-weight: 400;
    text-align: center;
}

img {
  height: auto;
  max-width: 100%;
  vertical-align: middle;
}

.btn {
  color: #ffffff!important;
  padding: 0.8rem!important;
  font-size: 14px!important;
  text-transform: uppercase!important;
  border-radius: 4px!important;
  font-weight: 400!important;
  display: block!important;
  width: 100%!important;
  margin: 10px 0!important;
  cursor: pointer!important;
  border: 1px solid rgba(255, 255, 255, 0.2)!important;
  background: transparent;
}

.btn:hover {
  background-color: rgba(255, 255, 255, 0.12)!important;
}

.cards {
  display: flex;
  flex-wrap: wrap;
  list-style: none;
  margin: 0;
  padding: 0;
}

.cards_item {
  display: flex;
  padding: 1rem;
}
.flex_item{
    display:flex;
    flex-wrap: wrap;
    justify-content: space-between;
}

@media (min-width: 40rem) {
  .cards_item {
    width: 50%;
  }
  .btn {
    width: 45%!important;
    margin: 0;
  }
}

@media (min-width: 56rem) {
  .cards_item {
    width: 33.3333%;
  }
  .btn {
    width: 45%!important;
    margin: 0;
  }
}

.card {
  background-color: white;
  border-radius: 0.25rem;
  box-shadow: 0 20px 40px -14px rgba(0, 0, 0, 0.25);
  display: flex;
  flex-direction: column;
  overflow: hidden;
}

.card_content {
  padding: 1rem;
  background: linear-gradient(to bottom left, #EF8D9C 40%, #FFC39E 100%);
}

.card_title {
  color: #ffffff;
  font-size: 1.1rem;
  font-weight: 700;
  letter-spacing: 1px;
  text-transform: capitalize;
  margin: 0px;
}

.card_text {
  color: #ffffff;
  font-size: 0.875rem;
  line-height: 1.5;
  margin-bottom: 1.25rem;    
  font-weight: 400;
}
</style>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
       <div id="app"></div>
       <script src="/js/app.js"></script>
    </body>
</html>
