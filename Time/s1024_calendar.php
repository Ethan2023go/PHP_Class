<style>
table,
tr,
td {
    border-collapse: collapse;
    border: 2px black solid;
    /* text-align: center; */
}

table {
    width: 75%;
    height: 30vh;
    /* margin: auto; */
    margin-top: 100px;
}

.a-1 {
    background-color: wheat;
}
</style>
</head>

<body>
    <?php
    echo "<h3>";
    echo date("西元Y年m月");
    echo "</h3>";
    $thisMonth=date("Y");
    $thisFirstDay=date("Y-m-1");
    $thisFirstDate=date('w',strtotime($thisFirstDay));
    $thisMonthDays=date("t");
    // t = 指定月份天數 (28-31)
    $thisLastDay=date("Y-m-$thisMonthDays");
    $weeks=ceil(($thisMonthDays+$thisFirstDate)/7);
    $firstCell=date("Y-m-d",strtotime("-$thisFirstDate days",strtotime($thisFirstDay)));
    echo $firstCell;
    echo "<table>";
    echo "<tr>";
    echo "<td>日</td>";
    echo "<td>一</td>";
    echo "<td>二</td>";
    echo "<td>三</td>";
    echo "<td>四</td>";
    echo "<td>五</td>";
    echo "<td>六</td>";
    echo "</tr>";
    for($i=0;$i<$weeks;$i++){
        echo "<tr>";
        for($j=0;$j<7;$j++){
            $addDays=7*$i+$j;
            $thisCellDate=strtotime("+$addDays days",strtotime($firstCell));
            if(date('w',$thisCellDate)==0 || date('w',$thisCellDate)==6){
                echo "<td style='background:pink'>";
    
            }else{
                echo "<td>";
            }
            if(date("m",$thisCellDate)==date("m",strtotime($thisFirstDay))){
                echo date("Y-m-d",$thisCellDate);
            }
            echo "</td>";
        }
        echo "</tr>";
    }
    
    echo "</table>";
    ?>
    <?php 
    echo "<h3>";
    echo date("西元Y年m月");
    echo "</h3>";
    $thisMonth=date("Y");
    $thisFirstDay=date("Y-m-1");
    $thisFirstDate=date('w',strtotime($thisFirstDay));
    $thisMonthDays=date("t");
    $thisLastDay=date("Y-m-$thisMonthDays");
    $weeks=ceil(($thisMonthDays+$thisFirstDate)/7);
    
    echo "<table>";
    echo "<tr>";
    echo "<td>日</td>";
    echo "<td>一</td>";
    echo "<td>二</td>";
    echo "<td>三</td>";
    echo "<td>四</td>";
    echo "<td>五</td>";
    echo "<td>六</td>";
    echo "</tr>";
    for($i=0;$i<$weeks;$i++){
        echo "<tr>";
        for($j=0;$j<7;$j++){
            echo "<td>";
            $tmp=7*($i+1)-(6-$j)-$thisFirstDate;
            if($tmp>0 && $tmp<=$thisMonthDays){
                echo $tmp;
            }
            
            echo "</td>";
        }
        echo "</tr>";
    }
    
    echo "</table>";
    ?>

    <table>
        <tr>
            <td class="a-1">日</td>
            <td>一</td>
            <td>二</td>
            <td>三</td>
            <td>四</td>
            <td>五</td>
            <td class="a-1">六</td>
        </tr>
        <tr>
            <td class="a-1">1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
            <td>6</td>
            <td class="a-1">7</td>
        </tr>
        <tr>
            <td class="a-1">8</td>
            <td>9</td>
            <td>10</td>
            <td>11</td>
            <td>12</td>
            <td>13</td>
            <td class="a-1">14</td>
        </tr>
        <tr>
            <td class="a-1">15</td>
            <td>16</td>
            <td>17</td>
            <td>18</td>
            <td>19</td>
            <td>20</td>
            <td class="a-1">21</td>
        </tr>
        <tr>
            <td class="a-1">22</td>
            <td>23</td>
            <td>24</td>
            <td>25</td>
            <td>26</td>
            <td>27</td>
            <td class="a-1">28</td>
        </tr>
        <tr>
            <td class="a-1">29</td>
            <td>30</td>
            <td>31</td>
            <td></td>
            <td></td>
            <td></td>
            <td class="a-1"></td>
        </tr>
    </table>
</body>