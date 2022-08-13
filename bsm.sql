CREATE TABLE cal_bsm(
    ID INTEGER(11)  NOT NULL PRIMARY KEY AUTO_INCREMENT
    ,Code VARCHAR(20)
    ,Caldate TIMESTAMP
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
    ,S_HR1 INTEGER(3) DEFAULT '60'
    ,S_HR2 INTEGER(3) DEFAULT '90'
    ,S_HR3 INTEGER(3) DEFAULT '120'
    ,S_Sensor VARCHAR(20) DEFAULT 'Nellcor'
    ,S_PO1 INTEGER(3) DEFAULT '90'
    ,S_PO2 INTEGER(3) DEFAULT '94'
    ,S_PO3 INTEGER(3) DEFAULT '98'
    ,S_Lead VARCHAR(2) DEFAULT 'LL'
    ,S_Res1 INTEGER(3) DEFAULT '20'
    ,S_Res2 INTEGER(3) DEFAULT '30'
    ,S_Res3 INTEGER(3) DEFAULT '40'
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
    ,S_HR1_Raw VARCHAR(50)
    ,S_HR2_Raw VARCHAR(50)
    ,S_HR3_Raw VARCHAR(50)
    ,S_PO1_Raw VARCHAR(50)
    ,S_PO2_Raw VARCHAR(50)
    ,S_PO3_Raw VARCHAR(50)
    ,S_Res1_Raw VARCHAR(50)
    ,S_Res2_Raw VARCHAR(50)
    ,S_Res3_Raw VARCHAR(50)
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
    ,S_HR1_Cal FLOAT(10)
    ,S_HR2_Cal FLOAT(10)
    ,S_HR3_Cal FLOAT(10)
    ,S_PO1_Cal FLOAT(10)
    ,S_PO2_Cal FLOAT(10)
    ,S_PO3_Cal FLOAT(10)
    ,S_Res1_Cal FLOAT(10)
    ,S_Res2_Cal FLOAT(10)
    ,S_Res3_Cal FLOAT(10)
);