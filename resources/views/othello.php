<!doctype html>
<html>

<head>
    <title>オセロ</title>
    <style>
    body { color:gray; }
    h1 { font-size:18pt; font-weight:bold; }
    </style>



  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>


  <script type="text/javascript">
    $(document).ready(function(){
      alert("jQueryファイルの読み込み完了でーす。");
    });
  </script>

</head>


<body>


 <table border="1">
    <tr border="1" *ngFor="let y of rangey;">
        <td *ngFor="let x of rangex;" (click)="ClickCell(x,y);">
            <div *ngIf="stone[x][y] ==1;then BlackImg"></div>
            <div *ngIf="stone[x][y] ==2;then whiteImg"></div>
            <div *ngIf="stone[x][y] ==-1;then outOfBoard"></div>
            <div *ngIf="judge[x][y] && stone[x][y]==0 ;then ok"></div>
            <ng-template #BlackImg><img src="../../assets/imgs/black.png"></ng-template>
            <ng-template #whiteImg><img src="../../assets/imgs/white.png"></ng-template>
            <ng-template #outOfBoard>☆</ng-template>
            <ng-template #ok>♢</ng-template>
        </td>
    </tr>
  </table>
  <div *ngIf="turnBlack;then thenBlock else elseBlock "></div>
  <ng-template #thenBlock>黒のターン(1)</ng-template>
  <ng-template #elseBlock>白のターン(2)</ng-template>


  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> -->
  <form id="form_1" method="post" accept-charset="utf-8" return false>
      <p>名前 <input type="text" name = "userid" id ="userid"> </p>
      <p>パスワード <input type="text" name = "passward" id="passward"> </p>
  </form>

  <button id="ajax" (click)="CConsole();">ajax</button>
  <div class="result"></div>

  
    

  <script type="text/javascript">

</body>
