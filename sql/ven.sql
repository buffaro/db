CREATE TABLE cal_ven(
    ID INTEGER(11)  NOT NULL PRIMARY KEY AUTO_INCREMENT
    ,Code VARCHAR(20)
    ,Caldate TIMESTAMP
    ,Room_T FLOAT(4)
    ,Room_H FLOAT(4)

-- Volume Ven
    -- 1
    ,V1_Check VARCHAR(20)
    ,V1_Rate_S INTEGER(3)
    ,V1_Tidal_S INTEGER(5)
    ,V1_Minute_S INTEGER(3)
    ,V1_Peak_S INTEGER(3)
    ,V1_IE_S INTEGER(3)
    ,V1_Oxygen_S INTEGER(2)
    -- 2
    ,V2_Check VARCHAR(20)
    ,V2_Rate_S INTEGER(3)
    ,V2_Tidal_S INTEGER(5)
    ,V2_Minute_S INTEGER(3)
    ,V2_Peak_S INTEGER(3)
    ,V2_IE_S INTEGER(3)
    ,V2_Oxygen_S INTEGER(2)
    -- 3
    ,V3_Check VARCHAR(20)
    ,V3_Rate_S INTEGER(3)
    ,V3_Tidal_S INTEGER(5)
    ,V3_Minute_S INTEGER(3)
    ,V3_Peak_S INTEGER(3)
    ,V3_IE_S INTEGER(3)
    ,V3_Oxygen_S INTEGER(2)
    -- 4
    ,V4_Check VARCHAR(20)
    ,V4_Rate_S INTEGER(3)
    ,V4_Tidal_S INTEGER(5)
    ,V4_Minute_S INTEGER(3)
    ,V4_Peak_S INTEGER(3)
    ,V4_IE_S INTEGER(3)
    ,V4_Oxygen_S INTEGER(2)

-- A_
    ,A_Title VARCHAR(100)
    ,A_Unit VARCHAR(100)
    ,A_S_1 INTEGER(3)
    ,A_S_2 INTEGER(3)
    ,A_S_3 INTEGER(3)
    ,A_S_1_Raw VARCHAR(50)
    ,A_S_2_Raw VARCHAR(50)
    ,A_S_3_Raw VARCHAR(50)
    ,A_S_1_Cal FLOAT(10)
    ,A_S_2_Cal FLOAT(10)
    ,A_S_3_Cal FLOAT(10)

-- B_
    ,B_Title VARCHAR(100)
    ,B_Unit VARCHAR(100)
    ,B_S_1 INTEGER(3)
    ,B_S_2 INTEGER(3)
    ,B_S_3 INTEGER(3)
    ,B_S_1_Raw VARCHAR(50)
    ,B_S_2_Raw VARCHAR(50)
    ,B_S_3_Raw VARCHAR(50)
    ,B_S_1_Cal FLOAT(10)
    ,B_S_2_Cal FLOAT(10)
    ,B_S_3_Cal FLOAT(10)

-- C_
    ,C_Title VARCHAR(100)
    ,C_Unit VARCHAR(100)
    ,C_S_1 INTEGER(3)
    ,C_S_2 INTEGER(3)
    ,C_S_3 INTEGER(3)
    ,C_S_1_Raw VARCHAR(50)
    ,C_S_2_Raw VARCHAR(50)
    ,C_S_3_Raw VARCHAR(50)
    ,C_S_1_Cal FLOAT(10)
    ,C_S_2_Cal FLOAT(10)
    ,C_S_3_Cal FLOAT(10)

-- D_
    ,D_Title VARCHAR(100)
    ,D_Unit VARCHAR(100)
    ,D_S_1 INTEGER(3)
    ,D_S_2 INTEGER(3)
    ,D_S_3 INTEGER(3)
    ,D_S_1_Raw VARCHAR(50)
    ,D_S_2_Raw VARCHAR(50)
    ,D_S_3_Raw VARCHAR(50)
    ,D_S_1_Cal FLOAT(10)
    ,D_S_2_Cal FLOAT(10)
    ,D_S_3_Cal FLOAT(10)

);