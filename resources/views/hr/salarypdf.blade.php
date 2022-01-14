<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice | Table Base </title>

</head>
<style>
    @page {
        margin:0.9;padding:0.9;
    } 
    body {
        font-family: Times New Roman;
        font-size: 33px;
        text-align: center;
        border: thin solid black;  
    }

</style>

<body style="padding:40px;background-color: #DDDDDD;">

    <div style="font-family: 'Poppins', sans-serif; color: black;">
        <h5>PAYSLIP FOR THE MONTH OF {{$sal->month}} {{$sal->year}}</h5>

        <table style="padding-bottom:70px; margin: 0 auto; width: 100%; text-align: center; max-width: 1050px;">
            <tr style="text-align: left;">
                <th style="width: 150px;"> 
                    <span style="font-size: 18px">PAYSLIP:</span>
                    <span style="font-size: 16px;"># {{$sal->id}}</span>
                    <h3 style="padding-top: 5px; font-size: 14px; margin: 0px;"></h3>
                </th>
                <th style="width: 150px;"> 
                    <span style="font-size: 18px">MONTH:</span>
                    <span style="font-size: 16px;">{{$sal->month}}</span></td>
                    <h3 style="padding-top: 5px; font-size: 14px; margin: 0px;"></h3>
                </th>
                <th style="width: 150px;"> 
                    <span style="font-size: 18px">YEAR:</span>
                    <span style="font-size: 16px;">{{$sal->year}}</span>
                    <h3 style="padding-top: 5px; font-size: 14px; margin: 0px;"></h3>
                </th>

            </tr>
           <!--  <tr style="text-align: left;">
                <td></td>
                <td>
                <td></td>
            </tr> -->
        </table>


        <hr>

        <table style="margin: 0 auto; width: 100%; text-align: center; max-width: 1050px;">
            <tr style="text-align: left;">
                <th style="width: 150px;"> 
                    <h3 style="font-size: 16px; margin-bottom: 0px;">Employee ID:</h3>
                    <span style="font-size: 13px;font-weight: lighter;">FT-00{{$sal->emp_reg}}</span>
                </th>
                <th style="width: 150px;"> 
                    <h3 style="font-size: 16px; margin-bottom: 0px;">Employee Name</h3>
                    <span style="font-size: 13px;font-weight: lighter;">{{$sal->emp_name}}</span>
                </th>
                <th style="width: 150px;"> 
                    <h3 style="font-size: 16px; margin-bottom: 0px;">Designation</h3>
                    <span style="font-size: 13px;font-weight: lighter;"> {{$sal->designation}}</span>
                </th>
                <th style="width: 150px;"> 
                    <h3 style="font-size: 16px; margin-bottom: 0px;">Department</h3>
                    <span style="font-size: 13px;font-weight: lighter;"> {{$sal->dept}}</span>
                </th>
            </tr>
        </table>

        <hr>
        <h3><u>Earnings</u></h3>
        <table style="margin: 0 auto; width: 100%; text-align: center; max-width: 1050px;">
            <tr style="text-align: left;">
                <th style="width: 150px;"> 
                    <h3 style="font-size: 16px; margin-bottom: 0px;">Basic Salary</h3>
                    <span style="font-size: 13px;font-weight: lighter;">{{$sal->basic_pay}} /=PKR</span>
                </th>
                <th style="width: 150px;"> 
                    <h3 style="font-size: 16px; margin-bottom: 0px;">Transport Allowance</h3>
                    <span style="font-size: 13px;font-weight: lighter;">{{$sal->travel_allowance}} /=PKR</span>
                </th>
                <th style="width: 150px;"> 
                    <h3 style="font-size: 16px; margin-bottom: 0px;">Medical Allowance</h3>
                    <span style="font-size: 13px;font-weight: lighter;">{{$sal->medical_allowance}} /=PKR</span>
                </th>
                <th style="width: 150px;"> 
                    <h3 style="font-size: 16px; margin-bottom: 0px;">Bonus</h3>
                    <span style="font-size: 13px;font-weight: lighter;">{{$sal->bonus}} /=PKR</span>
                </th>
                <th style="width: 150px;"> 
                    <h3 style="font-size: 16px; margin-bottom: 0px;">Incentives</h3>
                    <span style="font-size: 13px;font-weight: lighter;">{{$sal->incentives}} /=PKR</span>
                </th>
            </tr>
        </table>
        <hr>
        <h3><u>Deductions</u></h3>
        <table style="margin: 0 auto; width: 100%; text-align: center; max-width: 1050px;">
            <tr style="text-align: left;">
                <th style="width: 150px;"> 
                    <h3 style="font-size: 16px; margin-bottom: 0px;">Provident Fund</h3>
                    <span style="font-size: 13px;font-weight: lighter;">- {{$sal->p_fund}} /=PKR</span>
                </th>
                <th style="width: 150px;"> 
                    <h3 style="font-size: 16px; margin-bottom: 0px;">GST</h3>
                    <span style="font-size: 13px;font-weight: lighter;">- {{$sal->gst}} /=PKR</span>
                </th>
                <th style="width: 150px;"> 
                    <h3 style="font-size: 16px; margin-bottom: 0px;">Income Tax</h3>
                    <span style="font-size: 13px;font-weight: lighter;">- {{$sal->income_tax}} /=PKR</span>
                </th>
            </tr>
        </table>
        <p style="font-weight: lighter;font-size: 20px;padding-top:  2rem; font-style: italic;"> Net Salary: {{$amount}} /=PKR  (<span id="amt"></span> Rupees Only )</p>
    </div>

</body>
<script>
    var amount= "<?php echo"$amount"?>";
    //console.log(amount);
    const num = amount;
    const wordify = (num) => {
        const single = ["Zero", "One", "Two", "Three", "Four", "Five", "Six", "Seven", "Eight", "Nine"];
        const double = ["Ten", "Eleven", "Twelve", "Thirteen", "Fourteen", "Fifteen", "Sixteen", "Seventeen", "Eighteen", "Nineteen"];
        const tens = ["", "Ten", "Twenty", "Thirty", "Forty", "Fifty", "Sixty", "Seventy", "Eighty", "Ninety"];
        const formatTenth = (digit, prev) => {
            return 0 == digit ? "" : " " + (1 == digit ? double[prev] : tens[digit])
        };
        const formatOther = (digit, next, denom) => {
            return (0 != digit && 1 != next ? " " + single[digit] : "") + (0 != next || digit > 0 ? " " + denom : "")
        };
        let res = "";
        let index = 0;
        let digit = 0;
        let next = 0;
        let words = [];
        if (num += "", isNaN(parseInt(num))){
            res = "";
        }
        else if (parseInt(num) > 0 && num.length <= 10) {
            for (index = num.length - 1; index >= 0; index--) switch (digit = num[index] - 0, next = index > 0 ? num[index - 1] - 0 : 0, num.length - index - 1) {
                case 0:
                words.push(formatOther(digit, next, ""));
                break;
                case 1:
                words.push(formatTenth(digit, num[index + 1]));
                break;
                case 2:
                words.push(0 != digit ? " " + single[digit] + " Hundred" + (0 != num[index + 1] && 0 != num[index + 2] ? " and" : "") : "");
                break;
                case 3:
                words.push(formatOther(digit, next, "Thousand"));
                break;
                case 4:
                words.push(formatTenth(digit, num[index + 1]));
                break;
                case 5:
                words.push(formatOther(digit, next, "Lakh"));
                break;
                case 6:
                words.push(formatTenth(digit, num[index + 1]));
                break;
                case 7:
                words.push(formatOther(digit, next, "Crore"));
                break;
                case 8:
                words.push(formatTenth(digit, num[index + 1]));
                break;
                case 9:
                words.push(0 != digit ? " " + single[digit] + " Hundred" + (0 != num[index + 1] || 0 != num[index + 2] ? " and" : " Crore") : "")
            };
            res = words.reverse().join("")
        } else res = "";
        return res
    };
    var am= (wordify(num));
    console.log(am);
    $("#amt").html(am);
</script>
</html>