package java2;

public class Test {
	public boolean containsNumbers(String w) {
		//String  = (args [0]);
		 if(w.matches(".*\\d+.*")) {
			 return true;
		 }else {
			 return false;
		 }		
	}
	public String getNumbers(String w) {
		if(w.matches(".*\\d+.*")) {
			String u = w.replaceAll("\\D+", "");
			return u;
		}else {
			return "nothing" ;
		}		
	}
	public int countDecimals(String w){
		if(w.matches(".*\\d+.*")) {
			
		}
		return 5;
	}
}
