import java.util.ArrayList;
 
public class Student {
 
	String Name;
	//int roll_no[]=new roll_no[11];
        int roll_no;
        //String sec[]=new sec[11];
        String sec;
        String Dept;
        String Location;1
	
	public Student(String Name, int roll_no,String sec,String Dept, String Location) {
		this.Name=Name;
		this.roll_no=roll_no;
                this.sec=sec;
                this.Dept=Dept;
		this.Location=Location;
	}
 
	//toString() method returning string type data
        public String toString(){
		
		//return this.Name+""+this.id+""+this.Location;
		return "("+Name+","+roll_no+","+sec+","+Dept+","+Location+")";
		
	}

 
	public static void  main(String args[])
	{
		
		ArrayList al=new ArrayList();
		Student s = new Student ("Talha\t\t",101,"\tA\t","Software Engg.\t","Karachi\n");
		Student s1=new Student("Fazii\t",102,"\tB\t","Software Engg.\t","Lahore\n");
		Student s2=new Student("Sheikh\t",103, "\tC\t","Software Engg.\t","Islamabad\n");
		Student s3=new Student("Sufiyaan\t",104,"\tD\t","Software Engg.\t","Quetta\n");
		Student s4=new Student("Muddasir\t",105,"\tE\t","Software Engg.\t","Hyderabad\n");
		Student s5=new Student("Faizan\t",106,"\tF\t","Software Engg.\t","Mumbai\n");
		Student s6=new Student("Hamza\t",107,"\tG\t","Software Engg.\t","Balakot\n");
		Student s7=new Student("owais\t",108,"\tH\t","Software Engg.\t","Kashmir\n");
		Student s8=new Student("Rizwan\t",109,"\tI\t","Software Engg.\t","Dehli\n");
		Student s9=new Student("shan\t",110,"\tJ\t","Software Engg.\t","Gilgit\n");
		Student s10=new Student("Ali\t",111,"\tK\t","Software Engg.\t","Gwadar\n");
		
		al.add(s);
		al.add(s1);
		al.add(s2);
		al.add(s3);
		al.add(s4);
		al.add(s5);
		al.add(s6);
		al.add(s7);
		al.add(s8);
		al.add(s9);
		al.add(s10);
		
		//for(int i=0;i<al.size();i++)
		//for(int i=0;i<al.size();i++)
                    System.out.println("\t\tDATA OF STUDENTS");
                    System.out.println("==========================================================");
		    System.out.println("  NAME |    Roll No.| Section | Department   | City");
                    System.out.println("==========================================================");
		    System.out.println(al.toString());
                    
		

 }
}