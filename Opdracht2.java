package java2;

import java.util.Arrays;

public class Opdracht2 {	    
	/**      
	 * * @param args the command line arguments      
	 * */     
	public static void main(String[] args) {         
		char[] weg = {'"', '?', '*', '®'};      

		String tekst =           
				"Dit is een tekst met \" en ** en ?? "+          
				"en allerlei andere niet wenselijke tekens zoals ® etc.  ";  
		zin(tekst, weg);	
		string(tekst, weg);
		satz(tekst, weg);
	} 

	public static void zin(String tekst, char[] weg) {//zin zonder characters	    
		String newStr = tekst.replaceAll("[^a-zA-Z0-9.]", " ");         
		System.out.println(newStr);

	}

	public static void string(String tekst, char[] weg) {//de zin onder elkaar	 
		String artekst[]= tekst.split("[^a-zA-Z0-9.]");	
		  for (int i=0; i< artekst.length; i++) {
			    if(artekst[i].trim().length() == 0){//als er dus eigenlijk niks staat wordt het overgeslagen
			      artekst[i] = artekst[i +1];
			      i++;
			    }
			    else {
			    	System.out.println(artekst[i]);
			    }
		  }	
	}	
	
	public static void satz(String tekst, char[] weg) {
		for(int j=0; j < weg.length; j++) {//loopt door de string en replace de character(in array weg) met niks
			tekst = tekst.replace(Character.toString(weg[j]), "");
		}		
		System.out.println(tekst);		
	}	
	
}
