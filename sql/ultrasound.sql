CREATE TABLE cal_ultrasound(
    ID INTEGER(11)  NOT NULL PRIMARY KEY AUTO_INCREMENT
    ,Code VARCHAR(20)
    ,Caldate TIMESTAMP
    ,Room_T FLOAT(4)
    ,Room_H FLOAT(4)

-- Power 1
    ,A_Head INTEGER(3)
    ,A_Unit VARCHAR(10)
    ,A_Watt_S_1 FLOAT(5) DEFAULT '5'
    ,A_Watt_S_2 FLOAT(5) DEFAULT '10'
    ,A_Watt_S_3 FLOAT(5) DEFAULT '15'
    ,A_Watt_S_4 FLOAT(5) DEFAULT '20'
    ,A_Watt_S_5 FLOAT(5)
    ,A_Watt_Raw_1 VARCHAR(50)
    ,A_Watt_Raw_2 VARCHAR(50)
    ,A_Watt_Raw_3 VARCHAR(50)
    ,A_Watt_Raw_4 VARCHAR(50)
    ,A_Watt_Raw_5 VARCHAR(50)
    ,A_Watt_Cal_1 FLOAT(10)
    ,A_Watt_Cal_2 FLOAT(10)
    ,A_Watt_Cal_3 FLOAT(10)
    ,A_Watt_Cal_4 FLOAT(10)
    ,A_Watt_Cal_5 FLOAT(10)

-- Power 2
    ,B_Head INTEGER(3)
    ,B_Unit VARCHAR(10)
    ,B_Watt_S_1 FLOAT(5) DEFAULT '5'
    ,B_Watt_S_2 FLOAT(5) DEFAULT '10'
    ,B_Watt_S_3 FLOAT(5) DEFAULT '15'
    ,B_Watt_S_4 FLOAT(5) DEFAULT '20'
    ,B_Watt_S_5 FLOAT(5)
    ,B_Watt_Raw_1 VARCHAR(50)
    ,B_Watt_Raw_2 VARCHAR(50)
    ,B_Watt_Raw_3 VARCHAR(50)
    ,B_Watt_Raw_4 VARCHAR(50)
    ,B_Watt_Raw_5 VARCHAR(50)
    ,B_Watt_Cal_1 FLOAT(10)
    ,B_Watt_Cal_2 FLOAT(10)
    ,B_Watt_Cal_3 FLOAT(10)
    ,B_Watt_Cal_4 FLOAT(10)
    ,B_Watt_Cal_5 FLOAT(10)
    
);
