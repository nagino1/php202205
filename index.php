<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="list.css">
  <title>求職者情報入力フォーム（入力画面）</title>
</head>

<body>
  <form action="create.php" method="POST">
    <fieldset>
      <legend>求職者情報入力フォーム（入力画面）</legend>
        <div>
        <label>名前</label>
        <input type="text" name="name" >
        </div>
        <div>
        <label >年齢</label>
        <input type="text" name="age"></td> 
        </div>
        <div>
          入力日: <input type="date" name="today">
        </div>
        <div>
          TEL: <input type="text" name="tel">
        </div>
        <div>
          メール: <input type="text" name="mail">
        </div>
        <div>
          VISA: <input type="radio" name="ginou">技能実習
          <input type="radio" name="student">学生
          <input type="radio" name="tokutei">特定技能
          <input type="radio" name="koudo">高度人材
        </div>
      </table>
      

      <div>
        <button>submit</button>
      </div>
    </fieldset>
  </form>

</body>

</html>