#include <Servo.h>

Servo Horizontal;
Servo Vertical;
double H_pos = 0;
double V_pos = 0;

void setup() {
 Serial.begin(9600);
 Horizontal.attach(9);
 Vertical.attach(8);
 Horizontal.write(0);
 Vertical.write(0);
}

void loop() {
 String command = Serial.readString();

 
    if (command == "Right"|| command == "right") {
      for (H_pos = 0; H_pos <= 180; H_pos += 1) { 
        if (command == "Stop" || command == "stop"){
          break;
          }
        Horizontal.write(H_pos);              
        delay(10);                      
  }
    }
    
    if (command == "Left"|| command == "left") {
      for (H_pos = 180; H_pos >= 0; H_pos -= 1) { 
        if (command == "Stop" || command == "stop"){
          exit;
          }
        Horizontal.write(H_pos);              
        delay(10);                       
  }
    }
    if (command == "Forward" || command == "forward") {
      for (V_pos = 0; V_pos <= 180; V_pos += 1) { 
        if (command == "Stop" || command == "stop"){
          break;
          }
        Vertical.write(V_pos);              
        delay(10);                      
  }
    }
    if (command == "Backward" || command == "backward") {
      for (V_pos = 180; V_pos >= 0; V_pos -= 1) { 
        if (command == "Stop" || command == "stop"){
          break;
          }
        Vertical.write(V_pos);              
        delay(10);                       
  }
    }

}
