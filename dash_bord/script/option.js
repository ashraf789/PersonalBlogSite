var main=new Array("Select","Bangla","English","Engineering","Other");

Select=new Array("Select_writer");
Bangla=new Array("Aabdus Sukur Khan","Aashapurna Debi","Afroja Parveen","Ahsan Habib","Anisul Haq","Bani Basu","Baren Chakroborty","Bibhinna Lekhakera","Bibhutibhusan Bandyopadhay","Hasan Mostafi","Humayun Ahmed","Humayun Azad","Imadul Haq Milan","Jasimuddin","Jibananada Das","Mahmudul Khan","Masud Rana","michael madhusudhan dutta","Moti Nandi","Muhammed Jafar Iqbal","Nabanita Deb Sen","Narayan Gangopadhay","Narayan Sanyal","Pranab Bhatta","Premendra Mitra","Purnendu Potri","Rabindranath Tagore","Ramapada Chowdhury","Sahid Akhand","Samaresh Basu","Samaresh Majumdar","Sanjeeb Chattopadhay","Saradindu  Bandyopadhay","Saratchandra Chattopadhay","Satyajit Ray","Sayed Mujtaba  Ali","Sihab Sarkar","Sirshendu Mukhopadhay","Subodh Ghosh","Suchitra Bhattacharya","Sujit Dasgupta","Sukanto Chattopadhay","Sukumar Ray","Sunil Gangopadhay","Tanzania Hossain","Taslima Nasrin");

English=new Array("Mark Twain","Meena PDF","English Grammar   Understanding the Basics ebook","Harry Potter Series","English Grammar Understanding the Basics ebook","Basic Grammar in Many Voices","Grammar and Usage for Better Writing[Books 2 from 15]");

Engineering=new Array("Mechanical and Materials Collection","Electronics and Electrical Collection","C Programing Books","C++ Programing Books","Java Programing Books","Web Deasigning And Developing Books","Chemical Principles(6 ed)[Team Nanban]tmrg","Financial products   An introduction using mathematics and Excel[Team Nanban]tmrg","Biochemistry- A Short Course[Team Nanban]tmrg","Mechanical and Electrical Systems in Architecture, Engineering and Construction(5 ed)");

Other=new Array("Computer Releted Books"," All 23 Tintin bengali comics","How to Cheat at Securing Your Network","Hacking For Beginners - Hacking Tech All five volume{H33T}{Easypath}","Computer Basic Knowledge - Animated Guide + Quiz ","Lose Weight WITHOUT Dieting","How to Create the Next Facebook","60,001+ Best Baby Names","Korean Language Learning Book","Tin Goyenda","Medical E Book","E book class (1-9) 2013","Magazine Collection");
function change_value()
{
	
	var array_value = document.uplode.catagori.value;
	var optionArray = eval(array_value);
	for(var b=0; b<optionArray.length; b++)
	{
		var c = document.uplode.writer;
		c.options.length = 0;
		for(var d=0; d<optionArray.length; d++)
		{
			var val = optionArray[d];
			c.options[d] = new Option(val,val);
		}
	}
}