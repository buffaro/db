CREATE TABLE cal_temp(
    ID INTEGER(11)  NOT NULL PRIMARY KEY AUTO_INCREMENT
    ,Code VARCHAR(20)
    ,Caldate TIMESTAMP
    ,Room_T FLOAT(4)
    ,Room_H FLOAT(4)
-- Temperature
    ,S1 FLOAT(10)
    ,S2 FLOAT(10)
    ,S3 FLOAT(10)
    ,S4 FLOAT(10)
    ,S_UUT1_Raw VARCHAR(50)
    ,S_UUT2_Raw VARCHAR(50)
    ,S_UUT3_Raw VARCHAR(50)
    ,S_UUT4_Raw VARCHAR(50)
    ,S_Mas1_Raw VARCHAR(50)
    ,S_Mas2_Raw VARCHAR(50)
    ,S_Mas3_Raw VARCHAR(50)
    ,S_Mas4_Raw VARCHAR(50)
    ,S_UUT1_Cal FLOAT(10)
    ,S_UUT2_Cal FLOAT(10)
    ,S_UUT3_Cal FLOAT(10)
    ,S_UUT4_Cal FLOAT(10)
    ,S_Mas1_Cal FLOAT(10)
    ,S_Mas2_Cal FLOAT(10)
    ,S_Mas3_Cal FLOAT(10)
    ,S_Mas4_Cal FLOAT(10)
);