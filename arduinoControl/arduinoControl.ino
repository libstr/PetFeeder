const int trigPin = 9;
const int echoPin = 10;
 int d;
long duration;
int distance;
void setup()
{
  pinMode(trigPin, OUTPUT); // Sets the trigPin as an Output
pinMode(echoPin, INPUT); // Sets the echoPin as an Input
  pinMode(13, OUTPUT);
  Serial.begin(9600);
}
void loop() {
    if (Serial.available())
    {
        int state = Serial.read();
        if (state == '1')
           digitalWrite(13, HIGH);
        if (state == '2'){
           digitalWrite(13, LOW);
        
    ultra();
        
        }
    }
   
}
int ultra(){
  digitalWrite(trigPin, LOW);
delayMicroseconds(2);
// Sets the trigPin on HIGH state for 10 micro seconds
digitalWrite(trigPin, HIGH);
delayMicroseconds(10);
digitalWrite(trigPin, LOW);
// Reads the echoPin, returns the sound wave travel time in microseconds
duration = pulseIn(echoPin, HIGH);

// Calculating the distance
distance= duration*0.034/2;
Serial.println("d="+distance);
}

