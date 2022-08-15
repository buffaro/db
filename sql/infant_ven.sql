CREATE TABLE cal_infant_ven(
    ID INTEGER(11)  NOT NULL PRIMARY KEY AUTO_INCREMENT
    ,Code VARCHAR(20)
    ,Caldate TIMESTAMP
    ,Room_T FLOAT(4)
    ,Room_H FLOAT(4)
-- Rate 10
    ,A_UUT1_Cal FLOAT(10)
    ,A_UUT2_Cal FLOAT(10)
    ,A_UUT3_Cal FLOAT(10)
    ,A_UUT4_Cal FLOAT(10)
    ,A_Mas1_Cal FLOAT(10)
    ,A_Mas2_Cal FLOAT(10)
    ,A_Mas3_Cal FLOAT(10)
    ,A_Mas4_Cal FLOAT(10)
-- Rate 20
    ,B_UUT1_Cal FLOAT(10)
    ,B_UUT2_Cal FLOAT(10)
    ,B_UUT3_Cal FLOAT(10)
    ,B_UUT4_Cal FLOAT(10)
    ,B_Mas1_Cal FLOAT(10)
    ,B_Mas2_Cal FLOAT(10)
    ,B_Mas3_Cal FLOAT(10)
    ,B_Mas4_Cal FLOAT(10)
-- Rate 30
    ,C_UUT1_Cal FLOAT(10)
    ,C_UUT2_Cal FLOAT(10)
    ,C_UUT3_Cal FLOAT(10)
    ,C_UUT4_Cal FLOAT(10)
    ,C_Mas1_Cal FLOAT(10)
    ,C_Mas2_Cal FLOAT(10)
    ,C_Mas3_Cal FLOAT(10)
    ,C_Mas4_Cal FLOAT(10)
);