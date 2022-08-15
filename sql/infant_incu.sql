CREATE TABLE cal_infant_incu(
    ID INTEGER(11)  NOT NULL PRIMARY KEY AUTO_INCREMENT
    ,Code VARCHAR(20)
    ,Caldate TIMESTAMP
    ,Room_T FLOAT(4)
    ,Room_H FLOAT(4)
-- Temp
    ,AirT FLOAT(10)
    ,SkinT FLOAT(10)
    ,S_UUT1_Raw VARCHAR(50)
    ,S_UUT2_Raw VARCHAR(50)
    ,S_Mas1_Raw VARCHAR(50)
    ,S_Mas2_Raw VARCHAR(50)
    ,S_UUT1_Cal FLOAT(10)
    ,S_UUT2_Cal FLOAT(10)
    ,S_Mas1_Cal FLOAT(10)
    ,S_Mas2_Cal FLOAT(10)
-- Other Test
    ,Sound FLOAT(10)
    ,Flow FLOAT(10)
    ,HUM FLOAT(10)
-- FLow
    ,Fl1 INTEGER(3) DEFAULT '3'
    ,Fl2 INTEGER(3) DEFAULT '5'
    ,Fl3 INTEGER(3) DEFAULT '10'
    ,Fl1_Raw VARCHAR(50)
    ,Fl2_Raw VARCHAR(50)
    ,Fl3_Raw VARCHAR(50)
    ,Fl1_Cal FLOAT(10)
    ,Fl2_Cal FLOAT(10)
    ,Fl3_Cal FLOAT(10)
-- Suction
    ,Suc1 INTEGER(3) DEFAULT '100'
    ,Suc2 INTEGER(3) DEFAULT '200'
    ,Suc3 INTEGER(3) DEFAULT '300'
    ,Suc4 INTEGER(3) DEFAULT '400'
    ,Suc5 INTEGER(3) DEFAULT '500'
    ,Suc1_Raw VARCHAR(50)
    ,Suc2_Raw VARCHAR(50)
    ,Suc3_Raw VARCHAR(50)
    ,Suc4_Raw VARCHAR(50)
    ,Suc5_Raw VARCHAR(50)
    ,SucMax_Raw VARCHAR(50)
    ,Suc1_Cal FLOAT(10)
    ,Suc2_Cal FLOAT(10)
    ,Suc3_Cal FLOAT(10)
    ,Suc4_Cal FLOAT(10)
    ,Suc5_Cal FLOAT(10)
    ,SucMax_Cal FLOAT(10)
);