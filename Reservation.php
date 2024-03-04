<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revervation</title>
    <link rel="stylesheet" href="css/reservation.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    
    
    
</head>
<body>
    <!-- Trang đặt phòng: chọn lịch, phòng giường đôi/đơn, phòng vip, bao gồm ảnh, ưu đãi khuyến mại -->
    <!-- Header-->
    <?php include("html/header.html");?>
    <!-- Main-->
    <main><section class="section">
        <div class="center">
            <div class="title"><b>Reservation</b></div>
            <h2><a href="index.php">HOME </a>> RESERVATION</h2>
        </div>
        <div class="container">
            <div>
                <div class="booking_seclection">
                    <button class="button1" id="btndec"><a href="#" id="btndec1">INSTANT BOOKING</a></button>
                    <button class="button1"><a href="#">BOOKING ON REQUEST</a></button>
                    <button class="button1"><a href="#">PRIVACY POLICY</a></button>
                </div>
                <div class="select_date">
                    <p id="asc"><b>SELECT THE TOUR & CHECK-IN DATE</b></p>
                    <div class="box-input">
                        <label>Cruise for: </label>
                        <select id="numberOfDays" name="numday">
                            <option value="2">2 Days 1 Night</option>
                            <option value="3">3 Days 2 Nights</option>
                        </select>
                        <label>Check-in date: </label>
                        <input type="date" id="checkinDate" onchange="updateCheckOutDate()" name="date" value="" placeholder=""/>
                        <label>Check-out date: </label>
                        <input type="date" id="checkoutDate" readonly>
                    </div>
                </div>
                <!-- Cabin -->
                <table class="table-bordered">
                    <tr>
                        <th>Cruise Cabin</th>
                        <th></th>
                        <th>Cabin price</th>
                        <th>Cabin Selection</th>
                        <th>Total Price</th>
                    </tr>
                    <tr>
                        <td><img src="images/cabin1_1.jpg" height="210px"></td>
                        <td><div class="cabin_item">
                            <p class="cabin-name">Ocean Suite Balcony</p>
                            <p><b>Included: </b>5% Service charge, 10% VAT</p>
                        </div></td>
                        <td>
                            <div class="cabin_price" >
                                <p><b>Single: </b>USD <span id="price">$297</span></p>
                                <p><b>Double:</b>USD <span id="price">$371</span></p>
                            </div></td>
                        <td><div class="cabin_select"><div class="box_input">
                            <label>No. of cabin: </label>
                            <select name="numberOfCabin" onchange="calculate(); total()" id="firstValue">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                            </div>
                            <div class="people_in">
                                <div class="box-input box-input2">
                                    <label>Adults: </label>
                                    <select onchange="calculate(); total()" id="secondValue" name="city">
                                        <option value="0">0</option>
                                        <option value="297">1 Person</option>
                                        <option value="371">2 People</option>
                                    </select>
                                </div>
                        </div></div></td>
                        <td><div class="cabintotal" >
                            <p id="result"></p>
                            
                        </div></td>
                    </tr>
                    <tr>
                        <td><img src="/images/cabin2_1.jpg" height="210px"></td>
                        <td><div class="cabin_item">
                            <p class="cabin-name">Ocean Suite Balcony Triple</p>
                            <p><b>Included: </b>5% Service charge, 10% VAT</p>
                        </div></td>
                        <td><div class="cabin_price">
                            <p><b>Triple: </b>USD <span id="price">$557</span></p>
                        </div></td>
                        <td><div class="cabin_select">
                            <div class="box_input">
                                <label>No. of cabin: </label>
                                <select name="numberOfCabin" onchange="calculate2(), total()" id="firstValue2">
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>
                            <div class="people_in">
                                <div class="box-input">
                                    <label>Adults: </label>
                                    <select onchange="calculate2(), total()" id="secondValue2" name="city">
                                        <option value="0">0 </option>
                                        <option value="557">3 People</option>
                                    </select>
                                </div>
                            </div>
                        </div></td>
                        <td><div class="cabintotal" >
                            <p id="result2"></p>
                            
                        </div></td>
                    </tr>
                    <tr>
                        <td><img src="/images/cabin3_1.jpg" height="210px"></td>
                        <td><div class="cabin_item">
                            <p class="cabin-name">Ocean Suite Connecting Door</p>
                            <p><b>Included: </b>5% Service charge, 10% VAT</p>
                        </div></td>
                        <td><div class="cabin_price">
                            <p><b>Triple: </b>USD <span id="price">$564</span></p>
                            <p><b>Quad: </b>USD <span id="price">$705</span></p>
                        </div></td>
                        <td><div class="cabin_select">
                            <div class="box_input">
                                <label>No. of cabin: </label>
                                <select name="numberOfCabin" onchange="calculate3(); total()" id="firstValue3">
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                </select>
                            </div>
                            <div class="people_in">
                                <div class="box-input">
                                    <label>Adults: </label>
                                    <select onchange="calculate3(); total()" id="secondValue3" name="city">
                                        <option value="0">0</option>
                                        <option value="564">3 People</option>
                                        <option value="705">4 People</option>
                                        
                                    </select>
                                </div>
                            </div>
                        </div></td>
                        <td><div class="cabintotal" >
                            <p id="result3"></p>
                            
                        </div></td>
                    </tr>
                    <tr>
                        <td><img src="/images/cabin4_1.jpg" height="210px"></td>
                        <td><div class="cabin_item">
                            <p class="cabin-name">Elegance Suite Balcony Triple</p>
                            <p><b>Included: </b>5% Service charge, 10% VAT</p>
                        </div></td>
                        <td><div class="cabin_price">
                            <p><b>Triple: </b>USD <span id="price">$559</span></p>
                        </div></td>
                        <td><div class="cabin_select">
                            <div class="box_input">
                                <label>No. of cabin: </label>
                                <select name="numberOfCabin" onchange="calculate4(); total()" id="firstValue4">
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                </select>
                            </div>
                            <div class="people_in">
                                <div class="box-input">
                                    <label>Adults: </label>
                                    <select onchange="calculate4(); total()" id="secondValue4" name="city">
                                        <option value="0">0</option>
                                        <option value="559">3 People</option>
                                    </select>
                                </div>
                            </div>
                        </div></td>
                        <td><div class="cabintotal" >
                            <p id="result4"></p>
                            
                        </div></td>
                    </tr>
                    <tr>
                        <td><img src="/images/cabin5_1.jpg" height="210px"></td>
                        <td><div class="cabin_item">
                            <p class="cabin-name">President Suite Terrace</p>
                            <p><b>Included: </b>5% Service charge, 10% VAT</p>
                        </div></td>
                        <td><div class="cabin_price">
                            <p><b>Single: </b>USD <span id="price">$530</span></p>
                            <p><b>Double:</b>USD <span id="price">$668</span></p>
                        </div></td>
                        <td><div class="cabin_select">
                            <div class="box_input">
                                <label>No. of cabin: </label>
                                <select name="numberOfCabin" onchange="calculate5(); total()" id="firstValue5">
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                </select>
                            </div>
                            <div class="people_in">
                                <div class="box-input">
                                    <label>Adults: </label>
                                    <select onchange="calculate5(); total()" id="secondValue5" name="city">
                                        <option value="0">0</option>
                                        <option value="530">1 Person</option>
                                        <option value="668">2 People</option>
                                    </select>
                                </div>
                            </div>
                        </div></td>
                        <td><div class="cabintotal">
                            <p id="result5"></p>
                            
                        </div></td>
                    </tr>
                <table>    
                    <tr>
                        <td><div class="cabintotal" >
                            
                            <p id="lastprice"> Total price: <span id="totalprice"></span></p>

                            
                            
                        </div></td>
                    </tr>
                </table>
                <div class="btnbooknow" style="display: flex; justify-content: flex-end;">
                <button id="booking-button" style="display: none;"><a href="#">BOOK NOW</a></button>
                </div>
        </div>
    </section></main>
    <!-- Footer-->
    <?php include("html/footer.html");?>
    <script type="text/javascript">
        var today = new Date();
        var dd = ("0" + (today.getDate())).slice(-2);
        var mm = ("0" + (today.getMonth() +　1)).slice(-2);
        var yyyy = today.getFullYear();
        today = yyyy + '-' + mm + '-' + dd ;
        $("#checkinDate").attr("value", today);

        today1 = 2024 + '-' + 0 + 3 + '-' + 0 + 2;
        $("#checkoutDate").attr("value", today1);

        
        function updateCheckOutDate() {
            
            const checkInDateInput = document.getElementById("checkinDate");
            const checkOutDateInput = document.getElementById("checkoutDate");
            var stayDaysInput = document.getElementById('numberOfDays');
            

            // Get the selected check-in date and number of Days
            const checkInDate = new Date(checkInDateInput.value);
            console.log(checkInDate);
            var stayDays = parseInt(stayDaysInput.value);
            

            // Calculate the check-out date (e.g., add 1 day to check-in date)
            const checkOutDate = new Date(checkInDate);
            checkOutDate.setDate(checkOutDate.getDate() + 2);

            // Format the check-out date as YYYY-MM-DD
            const formattedCheckOutDate = checkOutDate.toISOString().split("T")[0];

            // Set the value of the check-out date input
            checkOutDateInput.value = formattedCheckOutDate;
        }
        
        function calculate() {
            const firstDropdown = document.getElementById('firstValue');
            const secondDropdown = document.getElementById('secondValue');
            const resultElement = document.getElementById('result');

            const firstValue = parseFloat(firstDropdown.value);
            const secondValue = parseFloat(secondDropdown.value);

            var multiplicationResult = firstValue * secondValue;
            resultElement.textContent = `Total: $${multiplicationResult}`;
        }
        function calculate2() {
            const firstDropdown = document.getElementById('firstValue2');
            const secondDropdown = document.getElementById('secondValue2');
            const resultElement = document.getElementById('result2');

            const firstValue = parseFloat(firstDropdown.value);
            const secondValue = parseFloat(secondDropdown.value);

            var multiplicationResult2 = firstValue * secondValue;
            resultElement.textContent = `Total: $${multiplicationResult2}`;
        }
        function calculate3() {
            const firstDropdown = document.getElementById('firstValue3');
            const secondDropdown = document.getElementById('secondValue3');
            const resultElement = document.getElementById('result3');

            const firstValue = parseFloat(firstDropdown.value);
            const secondValue = parseFloat(secondDropdown.value);

            var multiplicationResult3 = firstValue * secondValue;
            resultElement.textContent = `Total: $${multiplicationResult3}`;
        }
        function calculate4() {
            const firstDropdown = document.getElementById('firstValue4');
            const secondDropdown = document.getElementById('secondValue4');
            const resultElement = document.getElementById('result4');

            const firstValue = parseFloat(firstDropdown.value);
            const secondValue = parseFloat(secondDropdown.value);

            const multiplicationResult4 = firstValue * secondValue;
            resultElement.textContent = `Total: $${multiplicationResult4}`;
        }
        function calculate5() {
            const firstDropdown = document.getElementById('firstValue5');
            const secondDropdown = document.getElementById('secondValue5');
            const resultElement = document.getElementById('result5');

            const firstValue = parseFloat(firstDropdown.value);
            const secondValue = parseFloat(secondDropdown.value);

            const multiplicationResult5 = firstValue * secondValue;
            resultElement.textContent = `Total: $${multiplicationResult5}`;
        }

        function total(){
            const total = document.getElementById('totalprice');

            const firstDropdown = document.getElementById('firstValue');
            const secondDropdown = document.getElementById('secondValue');
            const resultElement = document.getElementById('result');

            const firstValue = parseFloat(firstDropdown.value);
            const secondValue = parseFloat(secondDropdown.value);

            var multiplicationResult = firstValue * secondValue;

            const firstDropdown2 = document.getElementById('firstValue2');
            const secondDropdown2 = document.getElementById('secondValue2');
            const resultElement2 = document.getElementById('result2');

            const firstValue2 = parseFloat(firstDropdown2.value);
            const secondValue2 = parseFloat(secondDropdown2.value);

            var multiplicationResult2 = firstValue2 * secondValue2;

            const firstDropdown3 = document.getElementById('firstValue3');
            const secondDropdown3 = document.getElementById('secondValue3');
            const resultElement3 = document.getElementById('result3');

            const firstValue3 = parseFloat(firstDropdown3.value);
            const secondValue3 = parseFloat(secondDropdown3.value);

            var multiplicationResult3 = firstValue3 * secondValue3;

            const firstDropdown4 = document.getElementById('firstValue4');
            const secondDropdown4 = document.getElementById('secondValue4');
            const resultElement4 = document.getElementById('result4');

            const firstValue4 = parseFloat(firstDropdown4.value);
            const secondValue4 = parseFloat(secondDropdown4.value);

            var multiplicationResult4 = firstValue4 * secondValue4;

            const firstDropdown5 = document.getElementById('firstValue5');
            const secondDropdown5 = document.getElementById('secondValue5');
            const resultElement5 = document.getElementById('result5');

            const firstValue5 = parseFloat(firstDropdown5.value);
            const secondValue5 = parseFloat(secondDropdown5.value);

            var multiplicationResult5 = firstValue5 * secondValue5;

            var sum = multiplicationResult + multiplicationResult2 + multiplicationResult3 + multiplicationResult4 + multiplicationResult5;
            var guestHasSelectedRoom = false;

            if(sum > 0){
                guestHasSelectedRoom = true;                
            }

            // Lấy thẻ nút đặt phòng
            const bookingButton = document.getElementById('booking-button');

            // Kiểm tra và hiển thị nút nếu khách đã chọn phòng
            if (guestHasSelectedRoom) {
                bookingButton.style.display = 'block'; // hoặc 'inline' tùy theo thiết kế của bạn
            } else {
                bookingButton.style.display = 'none';
            }
            
            total.textContent = ` $${sum}`;
            
        }
        

    </script>

</body>
</html>