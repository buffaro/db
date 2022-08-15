CREATE TABLE cal_pressure(
    ID INTEGER(11)  NOT NULL PRIMARY KEY AUTO_INCREMENT
    ,Code VARCHAR(20)
    ,Caldate TIMESTAMP
    ,Room_T FLOAT(4)
    ,Room_H FLOAT(4)
-- Pressure
    ,Press_Unit VARCHAR(50) DEFAULT 'mmHg'
    ,Press1 INTEGER(3) DEFAULT '20'
    ,Press2 INTEGER(3) DEFAULT '40'
    ,Press3 INTEGER(3) DEFAULT '60'
    ,Press4 INTEGER(3) DEFAULT '80'
    ,Press5 INTEGER(3) DEFAULT '100'
    ,Press6 INTEGER(3)
    ,Press7 INTEGER(3)
    ,Press8 INTEGER(3)
    ,Press9 INTEGER(3)
    ,Press10 INTEGER(3)
    ,Press1_Raw VARCHAR(50)
    ,Press2_Raw VARCHAR(50)
    ,Press3_Raw VARCHAR(50)
    ,Press4_Raw VARCHAR(50)
    ,Press5_Raw VARCHAR(50)
    ,Press6_Raw VARCHAR(50)
    ,Press7_Raw VARCHAR(50)
    ,Press8_Raw VARCHAR(50)
    ,Press9_Raw VARCHAR(50)
    ,Press10_Raw VARCHAR(50)
    ,Press1_Cal FLOAT(10)
    ,Press2_Cal FLOAT(10)
    ,Press3_Cal FLOAT(10)
    ,Press4_Cal FLOAT(10)
    ,Press5_Cal FLOAT(10)
    ,Press6_Cal FLOAT(10)
    ,Press7_Cal FLOAT(10)
    ,Press8_Cal FLOAT(10)
    ,Press9_Cal FLOAT(10)
    ,Press10_Cal FLOAT(10)

);