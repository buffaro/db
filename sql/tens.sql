CREATE TABLE cal_tens(
    ID INTEGER(11)  NOT NULL PRIMARY KEY AUTO_INCREMENT
    ,Code VARCHAR(20)
    ,Caldate TIMESTAMP
    ,Room_T FLOAT(4)
    ,Room_H FLOAT(4)
-- A_
    ,A_Title VARCHAR(100)
    ,A_Unit VARCHAR(100)
    ,A_S_1 INTEGER(3)
    ,A_S_2 INTEGER(3)
    ,A_S_3 INTEGER(3)
    ,A_S_4 INTEGER(3)
    ,A_S_5 INTEGER(3)
    ,A_S_6 INTEGER(3)
    ,A_S_1_Raw VARCHAR(50)
    ,A_S_2_Raw VARCHAR(50)
    ,A_S_3_Raw VARCHAR(50)
    ,A_S_4_Raw VARCHAR(50)
    ,A_S_5_Raw VARCHAR(50)
    ,A_S_6_Raw VARCHAR(50)
    ,A_S_1_Cal FLOAT(10)
    ,A_S_2_Cal FLOAT(10)
    ,A_S_3_Cal FLOAT(10)
    ,A_S_4_Cal FLOAT(10)
    ,A_S_5_Cal FLOAT(10)
    ,A_S_6_Cal FLOAT(10)

-- B_
    ,B_Title VARCHAR(100)
    ,B_Unit VARCHAR(100)
    ,B_S_1 INTEGER(3)
    ,B_S_2 INTEGER(3)
    ,B_S_3 INTEGER(3)
    ,B_S_4 INTEGER(3)
    ,B_S_5 INTEGER(3)
    ,B_S_6 INTEGER(3)
    ,B_S_1_Raw VARCHAR(50)
    ,B_S_2_Raw VARCHAR(50)
    ,B_S_3_Raw VARCHAR(50)
    ,B_S_4_Raw VARCHAR(50)
    ,B_S_5_Raw VARCHAR(50)
    ,B_S_6_Raw VARCHAR(50)
    ,B_S_1_Cal FLOAT(10)
    ,B_S_2_Cal FLOAT(10)
    ,B_S_3_Cal FLOAT(10)
    ,B_S_4_Cal FLOAT(10)
    ,B_S_5_Cal FLOAT(10)
    ,B_S_6_Cal FLOAT(10)

-- C_
    ,C_Title VARCHAR(100)
    ,C_Unit VARCHAR(100)
    ,C_S_1 INTEGER(3)
    ,C_S_2 INTEGER(3)
    ,C_S_3 INTEGER(3)
    ,C_S_4 INTEGER(3)
    ,C_S_5 INTEGER(3)
    ,C_S_6 INTEGER(3)
    ,C_S_1_Raw VARCHAR(50)
    ,C_S_2_Raw VARCHAR(50)
    ,C_S_3_Raw VARCHAR(50)
    ,C_S_4_Raw VARCHAR(50)
    ,C_S_5_Raw VARCHAR(50)
    ,C_S_6_Raw VARCHAR(50)
    ,C_S_1_Cal FLOAT(10)
    ,C_S_2_Cal FLOAT(10)
    ,C_S_3_Cal FLOAT(10)
    ,C_S_4_Cal FLOAT(10)
    ,C_S_5_Cal FLOAT(10)
    ,C_S_6_Cal FLOAT(10)

-- D_
    ,D_Title VARCHAR(100)
    ,D_Unit VARCHAR(100)
    ,D_S_1 INTEGER(3)
    ,D_S_2 INTEGER(3)
    ,D_S_3 INTEGER(3)
    ,D_S_4 INTEGER(3)
    ,D_S_5 INTEGER(3)
    ,D_S_6 INTEGER(3)
    ,D_S_1_Raw VARCHAR(50)
    ,D_S_2_Raw VARCHAR(50)
    ,D_S_3_Raw VARCHAR(50)
    ,D_S_4_Raw VARCHAR(50)
    ,D_S_5_Raw VARCHAR(50)
    ,D_S_6_Raw VARCHAR(50)
    ,D_S_1_Cal FLOAT(10)
    ,D_S_2_Cal FLOAT(10)
    ,D_S_3_Cal FLOAT(10)
    ,D_S_4_Cal FLOAT(10)
    ,D_S_5_Cal FLOAT(10)
    ,D_S_6_Cal FLOAT(10)
);