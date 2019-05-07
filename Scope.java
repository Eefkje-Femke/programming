package java2;

public class Scope {
		 
	StringBuffer output = new StringBuffer();
	 public String repeatStringHorizontal(String repeat, int count) {   
		 /*StringBuffer output = new StringBuffer();   */
		 for(int c = 0; c < count ; c++) {    
			 output.append(repeat);   
			 }   
		 return output.toString();  
		 } 
	 
	 public String repeatStringVertical(String repeat, int count) {   
		/* StringBuffer output = new StringBuffer();   */
		 for(int c = 0; c < count ; c++) {    
			 output.append(repeat);    
			 output.append("\n");   
			 }   
		 return output.toString();  
		 }   
		 
}
