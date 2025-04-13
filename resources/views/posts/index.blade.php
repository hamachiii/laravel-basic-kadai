<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laravel基礎</title>
</head>
<body>
  <h1>投稿一覧</h1>
  <!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Laravel基礎</title>
</head>

<body>
   <table>
       
       @foreach($posts as $post)
          
               
               <h3>{{ $post->title }}</h3>
               <p>{{ $post->content}}</p>
               
                 
       @endforeach       
   </table>
</body>

</html>
</body>
</html>