const express=require("express");
const bodyparser=require("body-parser");

const mongoose=require("mongoose");

const app=express();

app.use(bodyparser.urlencoded({extended :true}));
app.use(express.static("public"));

mongoose.connect("mongodb+srv://karthick:user321@cluster0.4noc7.mongodb.net/quantanicsDB",{useNewUrlParser : true});

const enquirySchema={
  name : String,
  mail_id : String,
  Phone_no : Number,
  type : String,
  address : String,
  pincode: String,
  description : String,
};

const Enquiry=mongoose.model("Enquiry",enquirySchema);


app.get("/",function(req,res){
  res.sendFile(__dirname+"/public/index.php");
});

app.get("/work",function(req,res){
  res.sendFile(__dirname+"/public/work.html");
});

app.get("/enquiry",function(req,res){
  res.sendFile(__dirname +"/public/enquiry.html");
});

app.get("/about",function(req,res){
  res.sendFile(__dirname +"/public/about.php");
});
app.get("/contact",function(req,res){
  res.sendFile(__dirname +"/public/contact.html");
});
app.get("/client",function(req,res){
  res.sendFile(__dirname +"/public/iotservice.html");
});
app.get("/client",function(req,res){
  res.sendFile(__dirname +"/public/productdev.html");
});
app.get("/client",function(req,res){
  res.sendFile(__dirname +"/public/customersupport.php");
});





app.post("/",function(req,res){

  const value1=new Enquiry({
    name : req.body.name,
    mail_id : req.body.email,
    Phone_no : req.body.number,
    type : req.body.type,
    address : req.body.add,
    pincode: req.body.pcode,
    description : req.body.pdesc,
  });

  const items=[value1];
  Enquiry.insertMany(items,function(err){
    if(err){
      console.log(err);
    }else{
      console.log("Succesfully inserted");
    }
    res.sendFile(__dirname +"/public/thankyou.jpg");
  });

});



app.listen(5000,function(req,res){
  console.log("success");
});
