import processing.serial.*;
Serial port;
PrintWriter output;
int counter = 0; 

String buf="";
String temp;
String recordData;
int i=0;
void setup(){
  port = new Serial(this,"COM3",9600);
  port.bufferUntil(10); 
  output = createWriter("positions.txt");  
  size(0,0);
}
void draw(){
  background(#2196f3);
  String onoff[]=loadStrings("http://localhost/petfeeder/state.txt");
  print(onoff[0]);
  if(onoff[0].equals("1")==true){
    port.write('1');
    i=0;
  }else{
    port.write('2');
    port.write('3');
    delay(100);
    if(i<1){
      ultra();
      i++;
    }
  }
  delay(500);
}
void ultra(){
  output = createWriter("positions.txt");
  for (int counter =0; counter <30; counter++){ 
        println(buf);
        recordData=buf;
    }  
  println("Writing to File");
  temp= recordData;
  output.print(temp); 
  output.flush();
  output.close(); 
}
void serialEvent(Serial p) {
  buf = p.readStringUntil('\n');
}
