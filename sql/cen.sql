CREATE TABLE cal_cen(
    ID INTEGER(11)  NOT NULL PRIMARY KEY AUTO_INCREMENT
    ,Code VARCHAR(20)
    ,Caldate TIMESTAMP
    ,Room_T FLOAT(4)
    ,Room_H FLOAT(4)
-- Speed
    ,S_Cen1 INTEGER(5)
    ,S_Cen2 INTEGER(5)
    ,S_Cen3 INTEGER(5)
    ,S_Cen4 INTEGER(5)
    ,S_Cen1_Raw VARCHAR(50)
    ,S_Cen2_Raw VARCHAR(50)
    ,S_Cen3_Raw VARCHAR(50)
    ,S_Cen4_Raw VARCHAR(50)
    ,S_Cen1_Cal FLOAT(10)
    ,S_Cen2_Cal FLOAT(10)
    ,S_Cen3_Cal FLOAT(10)
    ,S_Cen4_Cal FLOAT(10)
-- Timer
    ,S_Time1 FLOAT(10) DEFAULT '5'
    ,S_Time2 FLOAT(10) DEFAULT '10'
    ,S_Time1_Raw VARCHAR(50)
    ,S_Time2_Raw VARCHAR(50)
    ,S_Time1_Cal FLOAT(10)
    ,S_Time2_Cal FLOAT(10)
);