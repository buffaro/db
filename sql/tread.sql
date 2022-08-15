CREATE TABLE cal_tread(
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
    ,S_Speed6 INTEGER(5)
    ,S_Speed1_Raw VARCHAR(50)
    ,S_Speed2_Raw VARCHAR(50)
    ,S_Speed3_Raw VARCHAR(50)
    ,S_Speed4_Raw VARCHAR(50)
    ,S_Speed5_Raw VARCHAR(50)
    ,S_Speed6_Raw VARCHAR(50)
    ,S_Speed1_Cal FLOAT(10)
    ,S_Speed2_Cal FLOAT(10)
    ,S_Speed3_Cal FLOAT(10)
    ,S_Speed4_Cal FLOAT(10)
    ,S_Speed5_Cal FLOAT(10)
    ,S_Speed6_Cal FLOAT(10)
);