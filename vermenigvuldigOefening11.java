package java2;

public class vermenigvuldigOefening11 {
	 public int vermenigvuldig(int aantalkeer, int getal) {         
		 if (aantalkeer == 0) {             
			 return 0;         
		 } else if (aantalkeer == 1) {             
			 return getal;         
		 } else {             
			 return vermenigvuldig(aantalkeer-1, getal) + getal;         
		 }     
	 }
}
