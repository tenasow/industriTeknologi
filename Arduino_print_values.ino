int val;
int tempPin = 1;
const int analogInPin = A3;  
const int analogOutPin = 6; 

int sensorValue = 0;       
int outputValue = 0;        

void setup()
{
Serial.begin(9600);
}
void loop()
{
val = analogRead(tempPin);
float mv = ( val/1024.0)*5000;
float cel = mv/10;
float farh = (cel*9)/5 + 32;

Serial.print(cel);
  sensorValue = analogRead(analogInPin);
  outputValue = map(sensorValue, 0, 1023, 0, 255);
  analogWrite(analogOutPin, outputValue);

Serial.print(";");
Serial.println(sensorValue);

  delay(500);
}

