import 'package:flutter/cupertino.dart';
import 'package:flutter/material.dart';
import 'package:octopusgenius/event.dart';
import 'package:octopusgenius/event2.dart';
import 'package:octopusgenius/home.dart';
import 'package:octopusgenius/level.dart';
import 'package:octopusgenius/profile1.dart';
import 'package:octopusgenius/profile2.dart';

class Event extends StatefulWidget {
  @override
  State<StatefulWidget> createState() {
    return eventstate();
  }
}

class eventstate extends State {
  @override
  Widget build(BuildContext context) {
    return Container(
      decoration: BoxDecoration(
        image: DecorationImage(
          image: AssetImage('images/background.png'),
          fit: BoxFit.cover,
        ),
      ),
      child: Scaffold(
        appBar: PreferredSize(
          child: AppBar(
            title: const Text(
              "Username",
              style: TextStyle(
                fontSize: 25,
              ),
            ),
            actions: <Widget>[],
            backgroundColor: Color.fromARGB(255, 40, 3, 105),
            leading: Container(
              width: 70,
              child: CircleAvatar(
                child: IconButton(
                  padding: EdgeInsets.only(right: 0),
                  onPressed: () {
                    Navigator.push(
                      context,
                      MaterialPageRoute(
                        builder: (context) => profile2(),
                      ),
                    );
                  },
                  icon: Icon(Icons.person),
                ),
              ),
            ),
            shape: RoundedRectangleBorder(
              borderRadius: BorderRadius.only(
                bottomRight: Radius.circular(40),
              ),
            ),
          ),
          preferredSize: Size.fromHeight(80),
        ),
        backgroundColor: Colors.transparent,
        body: Column(
          mainAxisAlignment: MainAxisAlignment.spaceBetween,
          children: [
            Container(
              child: Row(
                mainAxisAlignment: MainAxisAlignment.start,
                children: [
                  Row(
                    children: [
                      IconButton(
                        onPressed: () {
                          Navigator.pop(context);
                        },
                        icon: Icon(
                          Icons.arrow_back,
                          color: Color.fromARGB(255, 199, 199, 199),
                          size: 30,
                        ),
                      ),
                    ],
                  ),
                  SizedBox(
                    width: 30,
                  ),
                  Row(
                    children: [
                      Image(
                        image: AssetImage('icons/star.png'),
                        width: 40,
                      ),
                      Text(
                        "99999",
                        style: TextStyle(
                            fontSize: 15, fontWeight: FontWeight.bold),
                      ),
                    ],
                  ),
                  SizedBox(
                    width: 50,
                  ),
                  Row(
                    children: [
                      Image(
                        image: AssetImage('icons/crab.png'),
                        width: 45,
                      ),
                      Text(
                        "99999",
                        style: TextStyle(
                            fontSize: 15, fontWeight: FontWeight.bold),
                      ),
                    ],
                  ),
                ],
              ),
            ),
            Expanded(
              child: ListView(
                children: [
                  ClipRRect(
                    child: Container(
                      color: Color.fromARGB(255, 40, 3, 105),
                      width: double.infinity,
                      height: 150,
                      child: MaterialButton(
                        onPressed: () {
                          Navigator.push(
                            context,
                            MaterialPageRoute(
                              builder: (context) => Event2(),
                            ),
                          );
                        },
                        child: Column(
                          children: [
                            Padding(
                              padding: const EdgeInsets.all(20),
                              child: Row(
                                mainAxisAlignment:
                                    MainAxisAlignment.spaceBetween,
                                children: [
                                  Text(
                                    'Name Event',
                                    style: TextStyle(
                                      color: Colors.white,
                                      fontSize: 30,
                                    ),
                                  ),
                                  Text(
                                    ' Time',
                                    style: TextStyle(
                                      color: Colors.white,
                                      fontSize: 20,
                                    ),
                                  ),
                                ],
                              ),
                            )
                          ],
                        ),
                      ),
                    ),
                    borderRadius: BorderRadius.circular(10),
                  ),
                  SizedBox(
                    height: 10,
                  ),
                  ClipRRect(
                    child: Container(
                      color: Color.fromARGB(255, 40, 3, 105),
                      width: double.infinity,
                      height: 150,
                      child: MaterialButton(
                        onPressed: () {},
                        child: Column(
                          children: [
                            Padding(
                              padding: const EdgeInsets.all(20),
                              child: Row(
                                mainAxisAlignment:
                                    MainAxisAlignment.spaceBetween,
                                children: [
                                  Text(
                                    'Name Event',
                                    style: TextStyle(
                                      color: Colors.white,
                                      fontSize: 30,
                                    ),
                                  ),
                                  Text(
                                    ' Time',
                                    style: TextStyle(
                                      color: Colors.white,
                                      fontSize: 20,
                                    ),
                                  ),
                                ],
                              ),
                            ),
                          ],
                        ),
                      ),
                    ),
                    borderRadius: BorderRadius.circular(10),
                  ),
                  SizedBox(
                    height: 10,
                  ),
                  ClipRRect(
                    child: Container(
                      color: Color.fromARGB(255, 40, 3, 105),
                      width: double.infinity,
                      height: 150,
                      child: MaterialButton(
                        onPressed: () {},
                        child: Column(
                          children: [
                            Padding(
                              padding: const EdgeInsets.all(20),
                              child: Row(
                                mainAxisAlignment:
                                    MainAxisAlignment.spaceBetween,
                                children: [
                                  Text(
                                    'Name Event',
                                    style: TextStyle(
                                      color: Colors.white,
                                      fontSize: 30,
                                    ),
                                  ),
                                  Text(
                                    ' Time',
                                    style: TextStyle(
                                      color: Colors.white,
                                      fontSize: 20,
                                    ),
                                  ),
                                ],
                              ),
                            )
                          ],
                        ),
                      ),
                    ),
                    borderRadius: BorderRadius.circular(10),
                  ),
                  SizedBox(
                    height: 10,
                  ),
                  ClipRRect(
                    child: Container(
                      color: Color.fromARGB(255, 40, 3, 105),
                      width: double.infinity,
                      height: 150,
                      child: MaterialButton(
                        onPressed: () {},
                        child: Column(
                          children: [
                            Padding(
                              padding: const EdgeInsets.all(20),
                              child: Row(
                                mainAxisAlignment:
                                    MainAxisAlignment.spaceBetween,
                                children: [
                                  Text(
                                    'Name Event',
                                    style: TextStyle(
                                      color: Colors.white,
                                      fontSize: 30,
                                    ),
                                  ),
                                  Text(
                                    ' Time',
                                    style: TextStyle(
                                      color: Colors.white,
                                      fontSize: 20,
                                    ),
                                  ),
                                ],
                              ),
                            )
                          ],
                        ),
                      ),
                    ),
                    borderRadius: BorderRadius.circular(10),
                  ),
                  SizedBox(
                    height: 10,
                  ),
                ],
              ),
            ),
          ],
        ),
        floatingActionButton: Container(
          width: 70,
          child: SizedBox(
            height: 100,
            child: FloatingActionButton(
              child: Icon(
                Icons.home,
                size: 40,
              ),
              backgroundColor: Color.fromARGB(255, 40, 3, 105),
              onPressed: () {
                Navigator.push(
                  context,
                  MaterialPageRoute(
                    builder: (context) => home(),
                  ),
                );
              },
            ),
          ),
        ),
        floatingActionButtonLocation: FloatingActionButtonLocation.centerDocked,
        bottomNavigationBar: BottomAppBar(
          shape: CircularNotchedRectangle(),
          child: Container(
            height: 70,
          ),
        ),
      ),
    );
  }
}
