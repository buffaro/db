CREATE TABLE cal_stress(
    ID INTEGER(11)  NOT NULL PRIMARY KEY AUTO_INCREMENT
    ,Code VARCHAR(20)
    ,Caldate TIMESTAMP
    ,Room_T FLOAT(4)
    ,Room_H FLOAT(4)
-- Speed
    ,S_Speed1 INTEGER(5)
    ,S_Speed2 INTEGER(5)
    ,S_Speed3 INTEGER(5)
    ,S_Speed4 INTEGER(5)
    ,S_Speed5 INTEGER(5)
    ,S_Speed1_Raw VARCHAR(50)
    ,S_Speed2_Raw VARCHAR(50)
    ,S_Speed3_Raw VARCHAR(50)
    ,S_Speed4_Raw VARCHAR(50)
    ,S_Speed5_Raw VARCHAR(50)
    ,S_Speed1_Cal FLOAT(10)
    ,S_Speed2_Cal FLOAT(10)
    ,S_Speed3_Cal FLOAT(10)
    ,S_Speed4_Cal FLOAT(10)
    ,S_Speed5_Cal FLOAT(10)
-- ECG
    ,S_HR1 INTEGER(3) DEFAULT '60'
    ,S_HR2 INTEGER(3) DEFAULT '90'
    ,S_HR3 INTEGER(3) DEFAULT '120'
    ,S_HR4 INTEGER(3) DEFAULT '180'
    ,S_HR1_Raw VARCHAR(50)
    ,S_HR2_Raw VARCHAR(50)
    ,S_HR3_Raw VARCHAR(50)
    ,S_HR4_Raw VARCHAR(50)
    ,S_HR1_Cal FLOAT(10)
    ,S_HR2_Cal FLOAT(10)
    ,S_HR3_Cal FLOAT(10)
    ,S_HR4_Cal FLOAT(10)
-- NIBP
    ,S_ES VARCHAR(3) DEFAULT '0'
    ,SL_Sys INTEGER(3) DEFAULT '120'
    ,SL_Mean INTEGER(3) DEFAULT '93'
    ,SL_Dia INTEGER(3) DEFAULT '80'
    ,SL_PR INTEGER(3) DEFAULT '80'
    ,SM_Sys INTEGER(3) DEFAULT '100'
    ,SM_Mean INTEGER(3) DEFAULT '77'
    ,SM_Dia INTEGER(3) DEFAULT '65'
    ,SM_PR INTEGER(3) DEFAULT '80'
    ,SH_Sys INTEGER(3) DEFAULT '150'
    ,SH_Mean INTEGER(3) DEFAULT '117'
    ,SH_Dia INTEGER(3) DEFAULT '100'
    ,SH_PR INTEGER(3) DEFAULT '80'
    ,SL_Sys_Raw VARCHAR(50)
    ,SL_Mean_Raw VARCHAR(50)
    ,SL_Dia_Raw VARCHAR(50)
    ,SL_PR_Raw VARCHAR(50)
    ,SM_Sys_Raw VARCHAR(50)
    ,SM_Mean_Raw VARCHAR(50)
    ,SM_Dia_Raw VARCHAR(50)
    ,SM_PR_Raw VARCHAR(50)
    ,SH_Sys_Raw VARCHAR(50)
    ,SH_Mean_Raw VARCHAR(50)
    ,SH_Dia_Raw VARCHAR(50)
    ,SH_PR_Raw VARCHAR(50)
    ,SL_Sys_Cal FLOAT(10)
    ,SL_Mean_Cal FLOAT(10)
    ,SL_Dia_Cal FLOAT(10)
    ,SL_PR_Cal FLOAT(10)
    ,SM_Sys_Cal FLOAT(10)
    ,SM_Mean_Cal FLOAT(10)
    ,SM_Dia_Cal FLOAT(10)
    ,SM_PR_Cal FLOAT(10)
    ,SH_Sys_Cal FLOAT(10)
    ,SH_Mean_Cal FLOAT(10)
    ,SH_Dia_Cal FLOAT(10)
    ,SH_PR_Cal FLOAT(10)
);