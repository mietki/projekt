<html>
<head>

</head>
<body bgcolor="gainsboro" >
<center>
<link rel="stylesheet" href="add.css" type="text/css" />
<script type="text/javascript" src="JavaScript.js"></script>
<p><font size="+3"> Dodaj wydarzenie </font></p>

<form action="add_database.php" method="post" enctype='multipart/form-data' onsubmit="return validate(this);">

 
 
 <p align="left"><b>*NAZWA:</B> </br><p align="left"><input type="text" name="nazwa" style="font-size: 20px; width: 800px; height: 40px" />

 <P>
 <p align="left"><b>*KATEGORIA:</B> </br><p align="left"><select name="kategoria" style="font-size: 20px; width: 800px; height: 40px">
  <option value="koncert">koncert</option>
  <option value="sport">sport</option>
  <option value="kultura">kultura</option>
  </select>
 <br>
 <P>
  <p align="left"><b>*OPIS:</B> </br><p align="left"> <textarea name="opis" cols="98" rows="10"></textarea> 
<br>
 <p align="left"><b>*MIEJSCE:</B> </br><p align="left"><input type="text" name="miejsce" style="font-size: 20px; width: 800px; height: 40px" />
 <br>
 <p align="left"><b>*KONTAKT:</B> </br><p align="left"><input type="text" name="kontakt" style="font-size: 20px; width: 800px; height: 40px" />
 <br>
 <p align="left"><b>*ORGANIZATOR:</B> </br><p align="left"><input type="text" name="organizator" style="font-size: 20px; width: 800px; height: 40px" />
 <br>
  <!doctype html>

  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script>

 <br>
<p align="left"><b>*DATA:</B> </br><p align="left"><input type="text" name="data" style="font-size: 20px; width: 400px; height: 40px"  id="datepicker"></p>
 <br>
 <p align="left"><b>GODZINA:</B> </br><p align="left"><select name="godzina" style="font-size: 20px; width: 50px; height: 40px">
 <option value="00">00</option>
  <option value="01">01</option>
  <option value="02">02</option>
   <option value="03">03</option>
  <option value="04">04</option>
  <option value="05">05</option>
   <option value="06">06</option>
  <option value="07">07</option>
  <option value="08">08</option>
   <option value="09">09</option>
  <option value="10">10</option>
  <option value="11">11</option>
   <option value="12">12</option>
  <option value="13">13</option>
  <option value="14">14</option>
  <option value="15">15</option>
  <option value="16">16</option>
   <option value="17">17</option>
  <option value="18">18</option>
  <option value="19">19</option>
  <option value="20">20</option>
  <option value="21">21</option>
  <option value="22">22</option>
  <option value="23">23</option>
 </select>
 
 <select name="minuta" style="font-size: 20px; width: 50px; height: 40px">
 <option value="00">00</option>
  <option value="01">01</option>
  <option value="02">02</option>
   <option value="03">03</option>
  <option value="04">04</option>
  <option value="05">05</option>
   <option value="06">06</option>
  <option value="07">07</option>
  <option value="08">08</option>
   <option value="09">09</option>
  <option value="10">10</option>
  <option value="11">11</option>
   <option value="12">12</option>
  <option value="13">13</option>
  <option value="14">14</option>
  <option value="15">15</option>
  <option value="16">16</option>
   <option value="17">17</option>
  <option value="18">18</option>
  <option value="19">19</option>
  <option value="20">20</option>
  <option value="21">21</option>
  <option value="22">22</option>
  <option value="23">23</option>
  <option value="24">24</option>
  <option value="25">25</option>
  <option value="26">26</option>
  <option value="27">27</option>
  <option value="28">28</option>
  <option value="29">29</option>
  <option value="30">30</option>
  <option value="31">31</option>
  <option value="32">32</option>
   <option value="33">33</option>
  <option value="34">34</option>
  <option value="35">35</option>
   <option value="36">36</option>
  <option value="37">37</option>
  <option value="38">38</option>
   <option value="39">39</option>
  <option value="40">40</option>
  <option value="41">41</option>
  <option value="42">42</option>
   <option value="43">43</option>
  <option value="44">44</option>
  <option value="45">45</option>
   <option value="46">46</option>
  <option value="47">47</option>
  <option value="48">48</option>
   <option value="49">49</option>
  <option value="50">50</option>
  <option value="51">51</option>
  <option value="52">52</option>
   <option value="53">53</option>
  <option value="54">54</option>
  <option value="55">55</option>
   <option value="56">56</option>
  <option value="57">57</option>
  <option value="58">58</option>
   <option value="59">59</option>
 
  
  
</select>
<p align="left"><b>GRAFIKA:</B> </br><p align="left">
<input type="file" name="file" /> </br>
</br>
<input type="reset" value="Wyczyść wszystko" />
<p>

<input type="submit" value="DODAJ WYDARZENIE DO BAZY" onClick="return validate(document.forms[0])" style="font-size: 16px; width: 310px; height: 50px" /></br><P>


* -pola obowiązkowe <p>
</form>
 
 
</body>
</html>
</form> 
</center>
</body>
</html>