CREATE TABLE cal_esu4(
    ID INTEGER(11)  NOT NULL PRIMARY KEY AUTO_INCREMENT
    ,Code VARCHAR(20)
    ,Caldate TIMESTAMP
-- Other 1
    ,B_Coag3_Name VARCHAR(50)
    ,B_Coag3_Load INTEGER(4)
    ,B_Coag3_1 INTEGER(3)
    ,B_Coag3_2 INTEGER(3)
    ,B_Coag3_3 INTEGER(3)
    ,B_Coag3_4 INTEGER(3)
    ,B_Coag3_5 INTEGER(3)
    ,B_Coag3_6 INTEGER(3)

    ,B_Coag3_1_Raw VARCHAR(50)
    ,B_Coag3_2_Raw VARCHAR(50)
    ,B_Coag3_3_Raw VARCHAR(50)
    ,B_Coag3_4_Raw VARCHAR(50)
    ,B_Coag3_5_Raw VARCHAR(50)
    ,B_Coag3_6_Raw VARCHAR(50)

    ,B_Coag3_1_Cal FLOAT(10)
    ,B_Coag3_2_Cal FLOAT(10)
    ,B_Coag3_3_Cal FLOAT(10)
    ,B_Coag3_4_Cal FLOAT(10)
    ,B_Coag3_5_Cal FLOAT(10)
    ,B_Coag3_6_Cal FLOAT(10)

-- Other 2
    ,B_Coag1_Name VARCHAR(50)
    ,B_Coag1_Load INTEGER(4)
    ,B_Coag1_1 INTEGER(3)
    ,B_Coag1_2 INTEGER(3)
    ,B_Coag1_3 INTEGER(3)
    ,B_Coag1_4 INTEGER(3)
    ,B_Coag1_5 INTEGER(3)
    ,B_Coag1_6 INTEGER(3)

    ,B_Coag1_1_Raw VARCHAR(50)
    ,B_Coag1_2_Raw VARCHAR(50)
    ,B_Coag1_3_Raw VARCHAR(50)
    ,B_Coag1_4_Raw VARCHAR(50)
    ,B_Coag1_5_Raw VARCHAR(50)
    ,B_Coag1_6_Raw VARCHAR(50)

    ,B_Coag1_1_Cal FLOAT(10)
    ,B_Coag1_2_Cal FLOAT(10)
    ,B_Coag1_3_Cal FLOAT(10)
    ,B_Coag1_4_Cal FLOAT(10)
    ,B_Coag1_5_Cal FLOAT(10)
    ,B_Coag1_6_Cal FLOAT(10)

-- Other 3
    ,B_Coag2_Name VARCHAR(50)
    ,B_Coag2_Load INTEGER(4)
    ,B_Coag2_1 INTEGER(3)
    ,B_Coag2_2 INTEGER(3)
    ,B_Coag2_3 INTEGER(3)
    ,B_Coag2_4 INTEGER(3)
    ,B_Coag2_5 INTEGER(3)
    ,B_Coag2_6 INTEGER(3)

    ,B_Coag2_1_Raw VARCHAR(50)
    ,B_Coag2_2_Raw VARCHAR(50)
    ,B_Coag2_3_Raw VARCHAR(50)
    ,B_Coag2_4_Raw VARCHAR(50)
    ,B_Coag2_5_Raw VARCHAR(50)
    ,B_Coag2_6_Raw VARCHAR(50)

    ,B_Coag2_1_Cal FLOAT(10)
    ,B_Coag2_2_Cal FLOAT(10)
    ,B_Coag2_3_Cal FLOAT(10)
    ,B_Coag2_4_Cal FLOAT(10)
    ,B_Coag2_5_Cal FLOAT(10)
    ,B_Coag2_6_Cal FLOAT(10)
-- HF Leakage
    ,HF_AE FLOAT(10)
    ,HF_NE FLOAT(10)
);