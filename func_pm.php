<?php

function PM($name, $pos)
{
    if($name == "Bedside Monitor" || $name == "Vital Signs Monitor" || $name == "Monitor(MRI)" || $name == "Monitor CT") {
        if($pos == 1) return "<span style='color:#00FFFB'><span style='color:#00FFFB'>หน้าปัด</span>";
        if($pos == 2) return "<span style='color:#00FFFB'>สวิตช์ เปิด-ปิด Power</span>";
        if($pos == 3) return "<span style='color:#00FFFB'>สวิตช์ เลือก Mode การใช้งาน</span>";
        if($pos == 4) return "<span style='color:#00FFFB'>ปลั๊กไฟ AC</span>";
        if($pos == 5) return "<span style='color:#00FFFB'>สายเสียบปลั๊กไฟ AC</span>";
        if($pos == 6) return "<span style='color:#00FFFB'>จุดต่อสายดิน</span>";
        if($pos == 7) return "<span style='color:#00FFFB'>Electrode</span>";
        if($pos == 8) return "<span style='color:#00FFFB'>NIBP Arm Cuff</span>";
        if($pos == 9) return "<span style='color:#00FFFB'>NIBP Tubing</span>";
        if($pos == 10) return "<span style='color:#00FFFB'>SpO2 Sensor</span>";
        if($pos == 11) return "<span style='color:#00FFFB'>Temperature Sensor</span>";
        if($pos == 12) return "<span style='color:#00FFFB'>Monitor Display</span>";
        if($pos == 13) return "<span style='color:#00FFFB'>Recorder</span>";
        if($pos == 14) return "<span style='color:#00FFFB'>Paper</span>";
        if($pos == 15) return "<span style='color:#00FF8B'>ECG Waveform</span>";
        if($pos == 16) return "<span style='color:#00FF8B'>Heart Rate</span>";
        if($pos == 17) return "<span style='color:#00FF8B'>Gain Amplifier</span>";
        if($pos == 18) return "<span style='color:#00FF8B'>Speed Tracing 25 mm/sec</span>";
        if($pos == 19) return "<span style='color:#00FF8B'>Speed Tracing 50 mm/sec</span>";
        if($pos == 20) return "<span style='color:#00FF8B'>Frequency Response</span>";
        if($pos == 21) return "<span style='color:#00FF8B'>Filter 50 Hz.</span>";
        if($pos == 22) return "<span style='color:#00FF8B'>Blood Pressure (Normal)</span>";
        if($pos == 23) return "<span style='color:#00FF8B'>Blood Pressure (High)</span>";
        if($pos == 24) return "<span style='color:#00FF8B'>Blood Pressure (Low)</span>";
        if($pos == 25) return "<span style='color:#00FF8B'>Temperature</span>";
        if($pos == 26) return "<span style='color:#00FF8B'>Respiration Rate</span>";
        if($pos == 27) return "<span style='color:#00FF8B'>Alarm</span>";
        if($pos == 28) return "<span style='color:#00FF8B'>";
        if($pos == 29) return "<span style='color:#00FF8B'>";
        if($pos == 30) return "<span style='color:#00FF8B'>";
    }

}
