CREATE TABLE cal_traction(
    ID INTEGER(11)  NOT NULL PRIMARY KEY AUTO_INCREMENT
    ,Code VARCHAR(20)
    ,Caldate TIMESTAMP
    ,Room_T FLOAT(4)
    ,Room_H FLOAT(4)
-- Force
    ,S_Force1 INTEGER(3) DEFAULT '10'
    ,S_Force2 INTEGER(3) DEFAULT '20'
    ,S_Force3 INTEGER(3) DEFAULT '30'
    ,S_Force4 INTEGER(3) DEFAULT '40'
    ,S_Force1_Raw VARCHAR(50)
    ,S_Force2_Raw VARCHAR(50)
    ,S_Force3_Raw VARCHAR(50)
    ,S_Force4_Raw VARCHAR(50)
    ,S_Force1_Cal FLOAT(10)
    ,S_Force2_Cal FLOAT(10)
    ,S_Force3_Cal FLOAT(10)
    ,S_Force4_Cal FLOAT(10)

-- Rest
    ,S_Rest1 INTEGER(3) DEFAULT '5'
    ,S_Rest2 INTEGER(3) DEFAULT '10'
    ,S_Rest3 INTEGER(3) DEFAULT '15'
    ,S_Rest4 INTEGER(3) DEFAULT '20'
    ,S_Rest1_Raw VARCHAR(50)
    ,S_Rest2_Raw VARCHAR(50)
    ,S_Rest3_Raw VARCHAR(50)
    ,S_Rest4_Raw VARCHAR(50)
    ,S_Rest1_Cal FLOAT(10)
    ,S_Rest2_Cal FLOAT(10)
    ,S_Rest3_Cal FLOAT(10)
    ,S_Rest4_Cal FLOAT(10)

-- Force Time
    ,T_Force1 INTEGER(3) DEFAULT '5'
    ,T_Force2 INTEGER(3) DEFAULT '10'
    ,T_Force3 INTEGER(3) DEFAULT '15'
    ,T_Force4 INTEGER(3) DEFAULT '20'
    ,T_Force1_Raw VARCHAR(50)
    ,T_Force2_Raw VARCHAR(50)
    ,T_Force3_Raw VARCHAR(50)
    ,T_Force4_Raw VARCHAR(50)
    ,T_Force1_Cal FLOAT(10)
    ,T_Force2_Cal FLOAT(10)
    ,T_Force3_Cal FLOAT(10)
    ,T_Force4_Cal FLOAT(10)

-- Rest Time
    ,T_Rest1 INTEGER(3) DEFAULT '5'
    ,T_Rest2 INTEGER(3) DEFAULT '10'
    ,T_Rest3 INTEGER(3) DEFAULT '15'
    ,T_Rest4 INTEGER(3) DEFAULT '20'
    ,T_Rest1_Raw VARCHAR(50)
    ,T_Rest2_Raw VARCHAR(50)
    ,T_Rest3_Raw VARCHAR(50)
    ,T_Rest4_Raw VARCHAR(50)
    ,T_Rest1_Cal FLOAT(10)
    ,T_Rest2_Cal FLOAT(10)
    ,T_Rest3_Cal FLOAT(10)
    ,T_Rest4_Cal FLOAT(10)
);