<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ユーザー設定変更</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../menu/css/style.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <?php include "../menu/menu.php" ?>

    <div class="card border-0 user-title-card">
        <div class="card-body">
            <h2 class="card-title">ユーザー登録内容変更</h2>
        </div>
    </div>

    <form action="userChangeCheck.php" method="post">
    <div class="card user-card">
        <div class="card-body">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <div class="row">
                        <p class="col-md-2">性別</p>
                        <div class="col-md-8">
                        <div class="row">
                        <div class="form-check form-check-inline col-sm-3">
                            <input class="form-check-input" type="radio" name="gender" id="male" value="男性">
                            <label class="form-check-label" for="male">
                              男性
                            </label>
                        </div>
                        <div class="form-check form-check-inline col-sm-3">
                            <input class="form-check-input" type="radio" name="gender" id="female" value="女性">
                            <label class="form-check-label" for="female">
                              女性
                            </label>
                        </div>
                        <div class="form-check form-check-inline col-sm-3">
                            <input class="form-check-input" type="radio" name="gender" id="none" value="その他">
                            <label class="form-check-label" for="none">
                              その他
                            </label>
                        </div>
                        </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
						<p class="col-md-2">生年月日</p>
						<div class="col-md-8">
							<div class="row">
								<div class="date col-md-4">
									<!-- 年選択 -->
									<select class="form-select" aria-label="Default select example" name="year">
										<option value="1920">1920</option>
										<option value="1921">1921</option>
										<option value="1922">1922</option>
										<option value="1923">1923</option>
										<option value="1924">1924</option>
										<option value="1925">1925</option>
										<option value="1926">1926</option>
										<option value="1927">1927</option>
										<option value="1928">1928</option>
										<option value="1929">1929</option>
										<option value="1930">1930</option>
										<option value="1931">1931</option>
										<option value="1932">1932</option>
										<option value="1933">1933</option>
										<option value="1934">1934</option>
										<option value="1935">1935</option>
										<option value="1936">1936</option>
										<option value="1937">1937</option>
										<option value="1938">1938</option>
										<option value="1939">1939</option>
										<option value="1940">1940</option>
										<option value="1941">1941</option>
										<option value="1942">1942</option>
										<option value="1943">1943</option>
										<option value="1944">1944</option>
										<option value="1945">1945</option>
										<option value="1946">1946</option>
										<option value="1947">1947</option>
										<option value="1948">1948</option>
										<option value="1949">1949</option>
										<option value="1950">1950</option>
										<option value="1951">1951</option>
										<option value="1952">1952</option>
										<option value="1953">1953</option>
										<option value="1954">1954</option>
										<option value="1955">1955</option>
										<option value="1956">1956</option>
										<option value="1957">1957</option>
										<option value="1958">1958</option>
										<option value="1959">1959</option>
										<option value="1960">1960</option>
										<option value="1961">1961</option>
										<option value="1962">1962</option>
										<option value="1963">1963</option>
										<option value="1964">1964</option>
										<option value="1965">1965</option>
										<option value="1966">1966</option>
										<option value="1967">1967</option>
										<option value="1968">1968</option>
										<option value="1969">1969</option>
										<option value="1970">1970</option>
										<option value="1971">1971</option>
										<option value="1972">1972</option>
										<option value="1973">1973</option>
										<option value="1974">1974</option>
										<option value="1975">1975</option>
										<option value="1976">1976</option>
										<option value="1977">1977</option>
										<option value="1978">1978</option>
										<option value="1979">1979</option>
										<option value="1980">1980</option>
										<option value="1981">1981</option>
										<option value="1982">1982</option>
										<option value="1983">1983</option>
										<option value="1984">1984</option>
										<option value="1985">1985</option>
										<option value="1986">1986</option>
										<option value="1987">1987</option>
										<option value="1988">1988</option>
										<option value="1989">1989</option>
										<option value="1990">1990</option>
										<option value="1991">1991</option>
										<option value="1992">1992</option>
										<option value="1993">1993</option>
										<option value="1994">1994</option>
										<option value="1995">1995</option>
										<option value="1996">1996</option>
										<option value="1997">1997</option>
										<option value="1998">1998</option>
										<option value="1999">1999</option>
										<option value="2000" selected>2000</option>
										<option value="2001">2001</option>
										<option value="2002">2002</option>
										<option value="2003">2003</option>
										<option value="2004">2004</option>
										<option value="2005">2005</option>
										<option value="2006">2006</option>
										<option value="2007">2007</option>
										<option value="2008">2008</option>
										<option value="2009">2009</option>
										<option value="2010">2010</option>
										<option value="2011">2011</option>
										<option value="2012">2012</option>
										<option value="2013">2013</option>
										<option value="2014">2014</option>
										<option value="2015">2015</option>
										<option value="2016">2016</option>
										<option value="2017">2017</option>
										<option value="2018">2018</option>
										<option value="2019">2019</option>
										<option value="2020">2020</option>
										<option value="2021">2021</option>
									</select>
								</div>
								<div class="date col-md-4">
									<!-- 月選択 -->
									<select class="form-select" aria-label="Default select example"  name="month">
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
										<option value="10">10</option>
										<option value="11">11</option>
										<option value="12">12</option>
									</select>
								</div>
								<div class="date col-md-4">
									<!-- 日選択 -->
									<select class="form-select" aria-label="Default select example"  name="day">
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
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
									</select>
								</div> 
							</div>
						</div>
					</div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <p class="col-md-2">氏名</p>
                        <div class="col-md-4">
                            <input type="text" class="form-control" id="inputSei" placeholder="姓" name="sei">
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" id="inputMei" placeholder="名" name="mei">
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <p class="col-md-2">メールアドレス</p>
                        <div class="col-md-8">
                            <input type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" placeholder="◯◯◯@example.jp" name="mail">
                        </div>
                    </div>
				<li class="list-group-item">
                    <div class="row">
                        <p class="col-md-2">住所</p>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="inputAddress" placeholder="全角で入力してください" name="address">
                        </div>
                    </div>
                </li>
                <hr>
                </li>
				<li class="list-group-item">
                    <div class="row">
                        <p class="col-md-2">パスワード入力</p>
                        <div class="col-md-8">
                            <input type="password" class="form-control" id="inputPassword" placeholder="現在のパスワードを入力してください" name="pass">
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                	<div class="row">
                    	<input type="submit" class="nextbtn btn btn-outline-ligth col-auto" value="次へ">
                	</div>
				</li>
            </ul>
        </div>
    </div>
</form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>